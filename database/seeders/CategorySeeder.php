<?php

namespace Database\Seeders;
use App\Models\Category;
use Illuminate\Support\Str;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
                    ['name_en' => 'Smartphone', 'name_ge' => 'სმარტფონი', 'slug' => 'smartphone'],
                    ['name_en' => 'Washing Machine', 'name_ge' => 'სარეცხი მანქანა', 'slug' => 'washing-machine'],
                    ['name_en' => 'Detergents', 'name_ge' => 'სამზარეულო ნივთიერებები', 'slug' => 'detergents'],
                    ['name_en' => 'Iron Systems', 'name_ge' => ' ütü sistemləri', 'slug' => 'iron-systems'],
                    ['name_en' => 'Accessories', 'name_ge' => 'აკსესუარები', 'slug' => 'accessories'],

                ];

                 foreach($categories as $cat){
                            Category::create(array_merge($cat, ['id' => (string) Str::ulid()]));
                        }
    }
}
