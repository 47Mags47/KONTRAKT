<?php

namespace App\Http\Controllers;

use App\Models\Glossary\Glossary_City;
use App\Models\Main\Main_Maker;
use Illuminate\Http\Request;

class MakerController extends Controller
{
    private function makerData($maker_id)
    {

    }

    private function items()
    {

    }

    private function getFilers()
    {
        return [
            'city_id' => [
                'preview' => 'город',
                'list' => Glossary_City::orderBy('name')->get(),
                'name' => 'name',
                'value' => 'id'
            ]
        ];
    }

    public function index(Request $request)
    {
        $makers = Main_Maker::whereNotNull('id');
        if ($request->search) {
            $makers->where(function ($query) use ($request) {
                $query->whereLike('name', $request->search)
                    ->orWhereLike('short_description', $request->search)
                    ->orWhereLike('long_description', $request->search);
            });
        }

        $makers = $makers->orderBy('name')->get();

        $filters = $this->getFilers();
        return view('pages.admin.maker.index', compact('makers', 'filters'));
    }

    public function create()
    {
        $cityes = Glossary_City::orderBy('name')->get();
        return view('pages.admin.maker.create', compact('cityes'));
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => ['required', 'string', 'min:4', 'max:255'],
            'adres' => ['nullable', 'string', 'min:4', 'max:255'],
            'short_description' => ['required', 'string', 'min:10', 'max:300'],
            'long_description' => ['nullable', 'string', 'min:10'],
            'logo' => ['required', 'image'],
            'link' => ['nullable', 'string', 'min:4', 'max:300'],
            'city_id' => ['required', 'notIn:0'],
        ]);

        $path = $request->file('logo')->store('maker-logos', 'public');
        $validate['logo'] = 'storage/' . $path;

        $maker = Main_Maker::create($validate);

        return redirect()->route('maker.show', ['maker' => $maker])->with(['message' => 'Запись успешно добавлена']);
    }

    public function show(Request $request)
    {
        $maker = Main_Maker::whereKey($request->maker)->first();
        return view('pages.admin.maker.show', compact('maker'));
    }

    public function delete(Main_Maker $maker)
    {
        $maker->delete();
        return redirect()->route('maker.index')->with(['message' => 'Поставщик удален']);
    }
}
