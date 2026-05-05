<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductResource;
use App\Http\Responses\PaginatedResponse;
use App\Models\Category;
use App\Models\Product;
use App\Services\ProductService;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Response;
use Inertia\Inertia;
use Symfony\Component\HttpFoundation\Response as HttpFoundationResponse;

class ProductController extends Controller{

protected $service;

public function __construct(ProductService $service)
{
    $this->service = $service;
}

public function index()
{
    $paginator = $this->service->getAllProducts(
        12,
    request()->query('page',1));
    $paginator->setCollection(
        ProductResource::collection($paginator->getCollection())
        ->collection
        );



    return Inertia::render('Products/Index', [
        'products' => new PaginatedResponse($paginator,200),

        'meta' => [
            'title' => 'Products | Bioline',
            'description' => 'All products page',
    ],
    ]);
}



public function show($locale = null, $id)
{
    $product = Product::with([
    'category',
    'images',
    'translations' => function ($query) use ($locale) {
        $query->where('locale', $locale);
    }
])->findOrFail($id);

    return Inertia::render('Products/Show', [
        'product' => (new ProductResource($product))->resolve(),

        'meta' => [
            'title' => $product->name . ' | Bioline',
            'description' => $product->description,
        ],
    ]);
}

public function store(Request $request){
    $validated =  $request->validate([
    'category_id' => 'required|integer|exists:categories,id',
    'name_en' => 'required|string',
    'name_ge' => 'required|string',
    'description_en' => 'nullable|string',
    'description_ge' => 'nullable|string',
    'image' => 'nullable|string',
    'price' => 'nullable|numeric|min:0',
     'unit_id' => 'nullable|exists:units,id', //sonradan elave etmishem
    'attributes' => 'nullable|array',
    'attributes.*.attribute_id' => 'required|integer|exists:attributes,id',
    'attributes.*.value' => 'required|string',
    'attributes.*.unit' => 'nullable|string'
    ]);
    $product = $this->service->createProduct($validated);
    return response()->json($product,201);
}

}
