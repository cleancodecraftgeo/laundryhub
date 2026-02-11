<?php

namespace Database\Seeders;

use App\Enums\AttributeStatusEnum;
use App\Models\Category;
use App\Models\Attribute;
use App\Models\Unit;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class AttributeSeeder extends Seeder
{
    public function run(): void
    {
        $unit = Unit::firstOrFail();
        $category = Category::where('slug', 'washing-machine')->firstOrFail();

        $attributes = [
            [
                'unit_id' => $unit->id,
                'category_id' => $category->id,
                'key' => 'weight',
                'label_en' => 'Weight',
                'label_ge' => 'Çəki',
                'status' => AttributeStatusEnum::ACTIVE->value
            ],
            [
                 'unit_id' => $unit->id,
                'category_id' => $category->id,
                'key' => 'fabric',
                'label_en' => 'Fabric Type',
                'label_ge' => 'Parça növü',
                'status' => AttributeStatusEnum::INACTIVE->value
            ],
        ];


      foreach ($attributes as $attr) {
            Attribute::create($attr);
        }
    }
}
