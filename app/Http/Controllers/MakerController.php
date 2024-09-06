<?php

namespace App\Http\Controllers;

use App\Models\Glossary\Glossary_City;
use App\Models\Main\Main_Maker;
use Illuminate\Http\Request;

class MakerController extends Controller
{
    private $maker, $items;

    private function makerData($maker_id){

    }

    private function items(){

    }

    public function index(){
        $makers = Main_Maker::get();
        return view('pages.admin.maker.index', compact('makers'));
    }

    public function create(){
        $cityes = Glossary_City::orderBy('name')->get();
        return view('pages.admin.maker.create', compact('cityes'));
    }

    public function store(Request $request){
        $validate = $request->validate([
            'name' => ['required', 'string', 'min:4', 'max:255'],
            'adres' => ['required', 'string', 'min:4', 'max:255'],
            'short_description' => ['required', 'string', 'max:300'],
            'long_description' => ['required', 'string'],
            'logo' => ['required', 'image'],
            'link' => ['required', 'string', 'min:4', 'max:255'],
            'city_id' => ['required', 'notIn:0'],
        ]);

        $path = $request->file('logo')->store('public/maker-logos');
        $validate['logo'] = 'storage/' . $path;

        Main_Maker::create($validate);

        return back()->with(['message' => 'Запись успешно добавлена']);
    }
}
