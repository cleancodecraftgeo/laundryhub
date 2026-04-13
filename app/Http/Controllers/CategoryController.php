<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Exception;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function __invoke()
    // {

    //    $categories = Category::query()->whereNull('category_id')
    //    ->with('subcategories')->get();
    //       return  response()->json($categories,200);
    //    }

public function __invoke($industry = null, $categ = null, $brand = null)
{
    $children = collect();
    $products = null;

    if (!$industry) {
        // 1. Səviyyə — NULL olanlar (parent-lər)
        $children = Category::whereNull('category_id')->get();

    } elseif (!$categ) {
        // 2. Səviyyə — industry-nin altındakılar
        $parent = Category::where('slug', $industry)->first();
        $children = $parent ? Category::where('category_id', $parent->id)->get() : collect();

    } elseif (!$brand) {
        // 3. Səviyyə — categ-in altındakılar (brandlar)
        $parent = Category::where('slug', $categ)->first();
        $children = $parent ? Category::where('category_id', $parent->id)->get() : collect();

    } else {
        // 4. Səviyyə — məhsullar
        $parent = Category::where('slug', $brand)->first();
        $products = $parent
            ? Product::where('category_id', $parent->id)->paginate(12)
            : Product::whereNull('id')->paginate(12);
    }

    return inertia('Products/Index', [
        'children'  => $children,
        'products'  => $products,
        'industry'  => $industry,
        'categ'     => $categ,
        'brand'     => $brand,
    ]);
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
