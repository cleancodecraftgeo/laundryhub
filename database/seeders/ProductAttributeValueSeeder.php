<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Product;
use App\Models\Attribute;
use App\Models\ProductAttributeValue;

class ProductAttributeValueSeeder extends Seeder
{
    public function run(): void
    {
        $product = Product::first();
        $weightAttr = Attribute::first();

        ProductAttributeValue::create([
            'id' => (string) Str::ulid(),
            'product_id' => $product->id,
            'attribute_id' => $weightAttr->id,
            'value' => '5 kg',
        ]);

        $fabricAttr = Attribute::where('key', 'fabric')->firstOrFail();
        ProductAttributeValue::create([
            'id' => (string) Str::ulid(),
            'product_id' => $product->id,
            'attribute_id' => $fabricAttr->id,
            'value' => 'Cotton',
        ]);
    }
}
