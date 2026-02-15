<?php

namespace Database\Seeders;

use App\Enums\ProductStatus;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $category = Category::where('slug', 'washing-machine')->firstOrFail();

        $products = [
            [
                'category_id' => $category->id,
                'status'=>ProductStatus::ACTIVE->value,

                'image' => 'washing-machines/lg.png',
                'price' => 1200
            ],
        ];

        foreach ($products as $prod) {
           $product =  Product::create(array_merge($prod, [
                'id' => (string) Str::ulid()
            ]));

            $product->translations()->createMany([
                ['title' => 'Lorem Ipsum En'  ,
                'locale'=>'en'],
                ['title' => 'Lorem Ipsum Ka'  ,
                'locale'=>'ka']

                ]);
        }


    }
}
