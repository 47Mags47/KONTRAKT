<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Glossary\City;
use App\Models\Main\Maker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MakerController extends Controller
{
    public function index(){
        $makers = Maker::paginate(50);
        return view('pages.maker.index', compact('makers'));
    }

    public function create(){
        $cityes = City::all();
        return view('pages.maker.create', compact('cityes'));
    }

    public function store(Request $request){
        if($request->file('logo') === null and session('logo') === null) return back()->withErrors('Поле "Логотип" обязательно для заполнения');
        session()->put('logo', $request->file('logo')->store('tmp'));

        $validated = $request->validate([
            'logo' => ['nullable', 'image'],
            'city_code' => ['required', 'exists:' . City::getTableName() . ',code'],
            'name' => ['required', 'string', 'min:4', 'max:255'],
            'address' => ['required'],
            'description' => ['required', 'string', 'min:4', 'max:10000'],
            'links' => ['nullable', 'array'],
            'links.*' => ['nullable', 'url'],
            'comment' => ['nullable', 'string', 'min:4', 'max:10000'],
        ]);

        $file_name = basename(session()->pull('logo'));
        Storage::disk('public')->move('tmp/' . $file_name, 'media/maker/' . $file_name);

        $validated['logo'] = 'media/maker/' . $file_name;
        $maker = Maker::create($validated);

        return redirect()->route('maker.show', compact('maker'));
    }

    public function show(Maker $maker){
        return view('pages.maker.show-admin', compact('maker'));
    }

    public function edit(Maker $maker){
        return view('pages.maker.edit', compact('maker'));
    }

    public function update(Request $request, Maker $maker){
        if($request->file('logo') !== null) session()->put('logo', $request->file('logo')->store('tmp'));

        $validated = $request->validate([
            'logo' => ['nullable', 'image'],
            'name' => ['required', 'string', 'min:4', 'max:255'],
            'address' => ['required'],
            'description' => ['required', 'string', 'min:4', 'max:10000'],
            'links' => ['nullable', 'array'],
            'links.*' => ['nullable', 'url'],
            'comment' => ['nullable', 'string', 'min:4', 'max:10000'],
        ]);

        if(session('logo') !== null) {
            $file_name = basename(session()->pull('logo'));
            Storage::disk('public')->move('tmp/' . $file_name, 'media/maker/' . $file_name);
            $maker->logo = 'media/maker/' . $file_name;
        }
        if($validated['name'] !== null) $maker->name = $validated['name'];
        if($validated['address'] !== null) $maker->address = $validated['address'];
        if($validated['description'] !== null) $maker->description = $validated['description'];
        if($validated['links'] !== null) $maker->links = $validated['links'];
        if($validated['comment'] !== null) $maker->comment = $validated['comment'];
        $maker->save();

        return redirect()->route('maker.show', compact('maker'));
    }

    public function destroy(){

    }
}
