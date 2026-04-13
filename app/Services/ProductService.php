<?php

namespace App\Services;

use App\Enums\AttributeStatusEnum;
use App\Models\Product;
use App\Models\ProductAttributeValue;
use Illuminate\Support\Facades\DB;

class ProductService {

public function createProduct(array $data){

return DB::transaction(function () use ($data) {
    $product = Product::create([
        'category_id'=>$data['category_id'],
        'name_en'=>$data['name_en'],
        'name_ge'=>$data['name_ge'],
        'description_en'=>$data['description_en'],
        'description_ge'=>$data['description_ge'],
        'image'=>$data['image'] ?? null,
        'price'=>$data['price']??0
    ]);

    if(!empty($data['attributes']))
        {
            foreach($data['attributes'] as $attr){
                ProductAttributeValue::create([
                    'product_id'=>$product->id,
                    'attribute_id'=>$attr['attribute_id'],
                    'value'=>$attr['value'],
                    'unit'=>$attr['unit']?? null,

                ]);
            }
        }
        return $product->load('attributes.attribute');

});

}

public function getAllProducts(int $perPage=5,int $page=1,$desc=1){
    return Product::query()
    ->status(AttributeStatusEnum::ACTIVE->value)
    ->with('translations')
    ->orderByDesc('created_at')
    ->paginate(
        perPage:$perPage,
        page:$page
    );
}

public function getProductById($id)
{
    return Product::with(['attributes.attribute'])->findOrFail($id);
}
}
