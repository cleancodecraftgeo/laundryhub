<?php

namespace Database\Seeders;

use App\Enums\UnitStatusEnum;
use App\Models\Unit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Unit::create([
            'title_en' =>'Kilo',
            'title_ge' =>'კილოგრამი',
            'iso_en' => 'kg',
            'iso_ge' => 'კგ',
            'status' => UnitStatusEnum::ACTIVE->value
        ]);
    }
}
