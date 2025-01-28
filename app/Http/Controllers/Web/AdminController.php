<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Glossary\City;
use App\Models\Glossary\ProductCategory;
use App\Models\Glossary\ServiceCategory;
use App\Models\Main\Maker;
use App\Models\Main\Product;
use App\Models\Main\Service;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $makerView = view('pages.admin.dashboard.maker-table-content', ['makers' => Maker::prepare($request->model === 'maker' ? $request : null)]);
        $productView = view('pages.admin.dashboard.product-table-content', ['products' => Product::prepare($request->model === 'product' ? $request : null)]);
        $servifceView = view('pages.admin.dashboard.service-table-content', ['services' => Service::prepare($request->model === 'service' ? $request : null)]);

        $cityes = City::orderBy('name')->get();
        $productCategories = ProductCategory::orderBy('name')->get();
        $serviceCategories = ServiceCategory::orderBy('name')->get();

        if ($request->ajax()) {
            switch ($request->model) {
                case 'maker':
                    return $makerView;
                    break;
                case 'product':
                    return $productView;
                    break;
                case 'service':
                    return $servifceView;
                    break;
                default:
                    return response('Bad Request', 400);
                    break;
            }
        }

        return view('pages.admin.dashboard.index', compact('cityes', 'makerView', 'productView', 'servifceView', 'productCategories', 'serviceCategories'));
    }
}
