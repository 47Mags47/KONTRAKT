<?php

namespace App\Http\Controllers\Web\Admin;

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

        $file_name = basename(session('logo'));
        Storage::disk('public')->move(session('logo'), 'media/maker/' . $file_name);

        $validated['logo'] = 'media/maker/' . $file_name;
        $maker = Maker::create($validated);

        return redirect()->route('admin.maker.show', compact('maker'));
    }

    public function show(Maker $maker){
        return view('pages.maker.show', compact('maker'));
    }

    public function edit(Maker $maker){
        return view('pages.maker.edit', compact('maker'));
    }

    public function update(Request $request, Maker $maker){
        $validated = $request->validate([
            'logo' => ['nullable', 'image'],
            'name' => ['required', 'string', 'min:4', 'max:255'],
            'address' => ['required'],
            'description' => ['required', 'string', 'min:4', 'max:10000'],
            'links' => ['nullable', 'array'],
            'links.*' => ['nullable', 'url'],
            'comment' => ['nullable', 'string', 'min:4', 'max:10000'],
        ]);
        $validated['logo'] = $request->file('logo')->store('media/maker');
        $maker->update($validated);

        return redirect()->route('admin.maker.show', compact('maker'));
    }

    public function destroy(){

    }
}
