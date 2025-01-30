<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Glossary\City;
use App\Models\Glossary\ProductCategory;
use App\Models\Glossary\ServiceCategory;
use App\Models\Main\Item;
use App\Models\Main\Maker;
use App\Models\Main\Product;
use App\Models\Main\Service;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $makerView = view('pages.admin.dashboard.maker-table-content', ['makers' => Maker::prepare($request->model === 'maker' ? $request : null)]);
        $itemView = view('pages.admin.dashboard.item-table-content', ['items' => Item::prepare($request->model === 'items' ? $request : null)]);

        if ($request->ajax()) {
            switch ($request->model) {
                case 'maker':
                    return $makerView;
                    break;
                case 'items':
                    return $itemView;
                    break;
                default:
                    return response('Bad Request', 400);
                    break;
            }
        }

        $cityes = City::orderBy('name')->get();

        return view('pages.admin.dashboard.index', compact('cityes', 'makerView', 'itemView'));
    }
}
