<?php

namespace app\Http\Controllers;

use App\Http\Resources\ProductResource;
use App\Http\Responses\PaginatedResponse;
use App\Services\ProductService;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Response;
use Symfony\Component\HttpFoundation\Response as HttpFoundationResponse;

class ProductController extends JsonResource{

protected $service;

public function __construct(ProductService $service)
{
    $this->service = $service;
}

public function index(){

   $paginator = $this->service->getAllProducts(20);


   $paginator->setCollection(collection:ProductResource::collection(
    resource:$paginator->getCollection()
    )->collection);

   return new PaginatedResponse(
    paginator:$paginator,
    status:HttpFoundationResponse::HTTP_OK
    );
}

public function show($id){
    return response()->json($this->service->getProductById($id));
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
