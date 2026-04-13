<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    public function run()
    {
        // --- 1. ANA KATEQORİYA: EQUIPMENTS ---
        $equipments = Category::create([
            'name_en'     => 'Equipments',
            'name_ge'     => 'აღჭურვილობა',
            'slug'        => Str::slug('Equipments'),
            'category_id' => null,
        ]);

        // --- EQUIPMENTS ALT KATEQORİYALARI (Görsel 1) ---

        // 1.1 DRY CLEANING MACHINES
        $dryCleaning = Category::create([
            'name_en'     => 'DRY CLEANING MACHINES',
            'name_ge'     => 'ქიმწმენდის მანქანები',
            'slug'        => Str::slug('DRY CLEANING MACHINES'),
            'category_id' => $equipments->id,
        ]);
        $this->createSubItems($dryCleaning->id, [
            'Perchloroethylene Series' => 'პერქლოროეთილენის სერია',
            'K4 Series'                => 'K4 სერია',
            'Multisolvent'             => 'მულტისოლვენტი'
        ]);

        // 1.2 INDUSTRIAL WASHERS
        $indWashers = Category::create([
            'name_en'     => 'INDUSTRIAL WASHERS',
            'name_ge'     => 'ინდუსტრიული სარეცხi მანქანები',
            'slug'        => Str::slug('INDUSTRIAL WASHERS'),
            'category_id' => $equipments->id,
        ]);
        $this->createSubItems($indWashers->id, [
            'High Speed Washer'      => 'მაღალსიჩქარიანი სარეცხი მანქანა',
            'Medium Speed Washer'    => 'საშუალო სიჩქარის სარეცხი მანქანა',
            'Hygienic Barrier Washer'=> 'ჰიგიენური ბარიერული სარეცხი მანქანა',
            'Speed Queen Washer'     => 'Speed Queen სარეცხი მანქანა',
            'Coin-Operated Washer'   => 'თვითმომსახურების სარეცხი მანქანა'
        ]);

        // 1.3 INDUSTRIAL DRYERS
        $indDryers = Category::create([
            'name_en'     => 'INDUSTRIAL DRYERS',
            'name_ge'     => 'ინდუსტრიული საშრობები',
            'slug'        => Str::slug('INDUSTRIAL DRYERS'),
            'category_id' => $equipments->id,
        ]);
        $this->createSubItems($indDryers->id, [
            'Industrial Tumble Dryer'   => 'ინდუსტრიული საშრობი დოლაბი',
            'Speed Queen Coin-Operated' => 'Speed Queen თვითმომსახურების საშრობი',
            'Speed Queen Dryer'         => 'Speed Queen საშრობი',
            'Coin-Operated Dryer'       => 'თვითმომსახურების საშრობი'
        ]);

        // 1.4 IRONING SYSTEMS
        $ironingSystems = Category::create([
            'name_en'     => 'IRONING SYSTEMS',
            'name_ge'     => 'საუთაო სისტემები',
            'slug'        => Str::slug('IRONING SYSTEMS'),
            'category_id' => $equipments->id,
        ]);
        $this->createSubItems($ironingSystems->id, [
            'Ironing Board'      => 'საუთაო მაგიდა',
            'Press Ironing'      => 'საუთაო პრესი',
            'Ironing Mannequin'  => 'საუთაო მანეკენი',
            'Robotic Ironing'    => 'რობოტიზებული დაუთოება',
            'Spot Removal Table' => 'ლაქების ამომყვანი მაგიდა',
            'Steam Generator'    => 'ორთქლის გენერatorი'
        ]);

        // 1.5 CONVEYORS
        $conveyors = Category::create([
            'name_en'     => 'CONVEYORS',
            'name_ge'     => 'კონვეიერები',
            'slug'        => Str::slug('CONVEYORS'),
            'category_id' => $equipments->id,
        ]);
        $this->createSubItems($conveyors->id, [
            'Conveyors System' => 'კონვეიერული სისტემა',
            'Packaging System' => 'შეფუთვის სისტემა'
        ]);

        // 1.6 FLATWORK IRONERS
        $flatwork = Category::create([
            'name_en'     => 'FLATWORK IRONERS',
            'name_ge'     => 'სარეცხის საუთაო მანქანები',
            'slug'        => Str::slug('FLATWORK IRONERS'),
            'category_id' => $equipments->id,
        ]);
        $this->createSubItems($flatwork->id, [
            'Chest Heating Ironers' => 'შიდა გათბობის საუთაოები',
            'FCI Series'            => 'FCI სერია',
            'FCIF Series'           => 'FCIF სერია',
            'FCIFF Series'          => 'FCIFF სერია',
            'Wall Ironers Series'   => 'კედლის საუთაოების სერია'
        ]);

        // --- 2. ANA KATEQORİYA: CHEMICALS & ACCESSORIES ---
        $chemicals = Category::create([
            'name_en'     => 'Chemicals & Accessories',
            'name_ge'     => 'ქიმიკატები და აქსესუარები',
            'slug'        => Str::slug('Chemicals & Accessories'),
            'category_id' => null,
        ]);

        // 2.1 WASHING CHEMICALS
        $washChem = Category::create([
            'name_en'     => 'WASHING CHEMICALS',
            'name_ge'     => 'სარეცხი ქიმიკატები',
            'slug'        => Str::slug('WASHING CHEMICALS'),
            'category_id' => $chemicals->id,
        ]);
        $this->createSubItems($washChem->id, [
            'Spot Removal'               => 'ლაქების ამომყვანი',
            'Laundry Chemicals'          => 'სარეცხი საშუალებები',
            'Wet Cleaning Chemicals'     => 'სველი წმენდის ქіმიკატები',
            'Leather Cleaning Chemicals' => 'ტყავის წმენდის ქიმიკატები',
            'Dry Cleaning Chemicals'     => 'ქიმწმენდის ქიმიკატები',
            'Spray'                      => 'სპრეი',
            'Shoe Cleaning Detergents'   => 'ფეხსაცმლის საწმენდი საშუალებები'
        ]);

        // 2.2 WASHING ACCESSORIES
        $washAcc = Category::create([
            'name_en'     => 'WASHING ACCESSORIES',
            'name_ge'     => 'სარეცხი აქსესუარები',
            'slug'        => Str::slug('WASHING ACCESSORIES'),
            'category_id' => $chemicals->id,
        ]);
        $this->createSubItems($washAcc->id, [
            'Brushes'             => 'ჯაგრისები',
            'Hangers'             => 'საკიდები',
            'Hanger Accessories'  => 'საკიდის აქსესუარები',
            'Ironing Accessories' => 'საუთაო აქსესუარები',
            'Marking Accessories' => 'მარკირების აქსესუარები',
            'Other Accessories'   => 'სხვა აქსესუარები'
        ]);

        // 2.3 WASHING TROLLEYS
        $trolleys = Category::create([
            'name_en'     => 'WASHING TROLLEYS',
            'name_ge'     => 'სარეცხი ურიკები',
            'slug'        => Str::slug('WASHING TROLLEYS'),
            'category_id' => $chemicals->id,
        ]);
        $this->createSubItems($trolleys->id, [
            'Stand'   => 'სადგამi',
            'Table'   => 'მაგიდა',
            'Trolley' => 'ურიკა'
        ]);

        // 2.4 DOSING SYSTEM
        $dosing = Category::create([
            'name_en'     => 'DOSING SYSTEM',
            'name_ge'     => 'დოზირების სისტემა',
            'slug'        => Str::slug('DOSING SYSTEM'),
            'category_id' => $chemicals->id,
        ]);
        $this->createSubItems($dosing->id, [
            'Pump' => 'ტუმბო'
        ]);
    }

    /**
     * Alt elementləri (Level 3) yaradan köməkçi funksiya
     */
    private function createSubItems($parentId, $items)
    {
        foreach ($items as $en => $ge) {
            Category::create([
                'name_en'     => $en,
                'name_ge'     => $ge,
                'slug'        => Str::slug($en),
                'category_id' => $parentId,
            ]);
        }
    }
}
