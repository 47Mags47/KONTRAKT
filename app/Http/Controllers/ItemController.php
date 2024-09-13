<?php

namespace App\Http\Controllers;

use App\Models\Glossary\Glossary_ItemCategory;
use App\Models\Glossary\Glossary_Itemtype;
use App\Models\Main\Main_Item;
use App\Models\Main\Main_Maker;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function create(Main_Maker $maker)
    {
        $types = Glossary_Itemtype::all();
        $categories = Glossary_ItemCategory::all();
        return view('pages.admin.item.create', compact('types', 'categories', 'maker'));
    }

    public function store(Request $request, Main_Maker $maker)
    {
        $validate = $request->validate([
            'category_id' => ['notIn:0'],
            'name' => ['required', 'min:4', 'max:255'],
            'link' => ['nullable', 'url:http,https'],
            'short_description' => ['required', 'min:5', 'max:255'],
            'long_description' => ['min:30']
        ]);
        $validate = array_merge($validate, [
            'maker_id' => $maker->id
        ]);

        Main_Item::create($validate);

        return redirect()->route('maker.show', ['maker' => $maker]);
    }

    public function edit(Request $request, Main_Maker $maker, Main_Item $item){
        $types = Glossary_Itemtype::all();
        $categories = Glossary_ItemCategory::all();
        return view('pages.admin.item.edit', compact('maker', 'item', 'types', 'categories'));
    }

    public function update(Request $request, Main_Maker $maker, Main_Item $item){
        $validate = $request->validate([
            'category_id' => ['notIn:0'],
            'name' => ['required', 'min:6', 'max:255'],
            'link' => ['nullable', 'url:http,https'],
            'short_description' => ['required', 'min:5', 'max:255'],
            'long_description' => ['min:30']
        ]);

        $item->update($validate);
        return redirect()->route('maker.show', compact('maker'));
    }
}
