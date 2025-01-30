<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Glossary\ItemTag;
use App\Models\Glossary\ItemType;
use App\Models\Main\Item;
use App\Models\Main\Maker;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function create(Maker $maker, $type = null)
    {
        $type = ItemType::whereKey($type)->first();
        $types = ItemType::orderBy('name')->get();
        $tags = ItemTag::orderBy('name')->get();
        return view('pages.admin.item.create', compact('maker', 'types', 'type', 'tags'));
    }

    public function store(Request $request, Maker $maker)
    {
        $validated = $request->validate([
            'logo' => ['required', 'image'],
            'type_code' => ['required', 'exists:' . ItemType::getTableName() . ',code'],
            'name' => ['required', 'string', 'min:4', 'max:255'],
            'description' => ['required', 'string', 'min:4', 'max:10000'],
        ]);

        $data = array_merge($validated, [
            'logo' => $request->file('logo')->store('media/item'),
            'maker_id' => $maker->id,
            'type_id' => ItemType::where('name', 'Товар')->first()->id,
        ]);

        $item = Item::create($data);

        return redirect()->route('item.show', compact('maker', 'item'));
    }

    public function show(Maker $maker, Item $item)
    {
        return view('pages.admin.item.show', compact('maker', 'item'));
    }

    public function editProduct(Maker $maker, Item $item) {
        return view('pages.admin.item.edit', compact('maker', 'item'));
    }

    public function update(Request $request, Maker $maker, Item $item){
        $validated = $request->validate([
            'name' => ['required', 'string', 'min:4', 'max:255'],
            'description' => ['required', 'string', 'min:4', 'max:10000'],
        ]);
        if ($request->has('logo')) $validated['logo'] = $request->file('logo')->store('media/item');

        $item->update($validated);
        return redirect()->route('item.show', compact('maker', 'item'));
    }
}
