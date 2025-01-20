<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Models\Glossary\ProductCategory;
use App\Models\Main\Maker;
use App\Models\Main\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create(Maker $maker)
    {
        $product_categories = ProductCategory::orderBy('name')->get();
        return view('pages.admin.product.create', compact('maker', 'product_categories'));
    }

    public function store(Request $request, Maker $maker)
    {
        $validated = $request->validate([
            'logo' => ['required', 'image'],
            'category_code' => ['required', 'exists:' . ProductCategory::getTableName() . ',code'],
            'name' => ['required', 'string', 'min:4', 'max:255'],
            'description' => ['required', 'string', 'min:4', 'max:10000'],
        ]);
        $validated['logo'] = $request->file('logo')->store('media/product');
        $validated['maker_id'] = $maker->id;

        Product::create($validated);

        return redirect()->to(route('admin.maker.show', ['maker' => $maker]) . '#product-box');
    }

    public function show(Product $product){
        return view('pages.admin.product.show', compact('product'));
    }
}
