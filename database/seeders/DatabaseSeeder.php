<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;
use Database\Seeders\ProductSeeder;
use Database\Seeders\CategorySeeder;
use Database\Seeders\AttributeSeeder;
use Database\Seeders\ProductAttributeValueSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void

    {

    $this->call([
        CategorySeeder::class,
        UnitSeeder::class,
      //  AttributeSeeder::class,

      //  ProductAttributeValueSeeder::class,
]);

    Product::factory(100)->create();
    

    }
}
