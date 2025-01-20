<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Models\Glossary\City;
use App\Models\Main\Maker;
use Illuminate\Http\Request;

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
        $validated = $request->validate([
            'logo' => ['required', 'image'],
            'city_code' => ['required', 'exists:' . City::getTableName() . ',code'],
            'name' => ['required', 'string', 'min:4', 'max:255'],
            'address' => ['required'],
            'description' => ['required', 'string', 'min:4', 'max:10000'],
            'links' => ['nullable', 'array'],
            'links.*' => ['nullable', 'url']
        ]);
        $validated['logo'] = $request->file('logo')->store('media/maker');

        $maker = Maker::create($validated);

        return redirect()->route('admin.maker.show', compact('maker'));
    }

    public function show(Maker $maker){
        return view('pages.maker.show', compact('maker'));
    }

    public function edit(){

    }

    public function update(){

    }

    public function destroy(){

    }
}
