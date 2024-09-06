<?php

namespace App\Http\Controllers;

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
        return view('pages.admin.maker.create');
    }
}
