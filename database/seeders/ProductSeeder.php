<?php

namespace Database\Seeders;

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
                'name_en' => 'LG Washing Machine',
                'name_ge' => 'LG სარეცხი მანქანა',
                'description_en' => 'Energy efficient washing machine',
                'description_ge' => 'ენერგოეფექტური სარეცხი მანქანა',
                'image' => 'washing-machines/lg.png',
                'price' => 1200
            ],
        ];

        foreach ($products as $prod) {
            Product::create(array_merge($prod, [
                'id' => (string) Str::ulid()
            ]));
        }


    }
}
