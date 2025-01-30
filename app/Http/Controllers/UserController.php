<?php

namespace App\Http\Controllers;

use App\Models\Main\Item;
use App\Models\Main\Product;
use App\Models\Main\Service;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $items = Item::take(60)->get();
        return view('pages.index', compact('items'));
    }
}
