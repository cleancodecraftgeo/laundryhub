<?php
namespace Database\Factories;

use App\Models\Category;
use App\Models\Unit;
use App\Models\Product;
use App\Models\ProductTranslate;
use App\Models\ProductTranslation;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition(): array
    {
        return [
            // Əgər bazada kateqoriya varsa onu seçir, yoxdursa yenisini yaradır
            'category_id' => Category::inRandomOrder()->first()?->id ?? Category::factory(),

            // Eyni məntiq unit (kq, ədəd və s.) üçün
            'unit_id'     => Unit::inRandomOrder()->first()?->id ?? Unit::factory(),

            // Şəkil yolu (string olaraq)
            'image'       => 'products/item-' . $this->faker->numberBetween(1, 100) . '.jpg',

            'price'       => $this->faker->randomFloat(2, 5, 2000), // 5.00 - 2000.00 arası
            'status'      => $this->faker->randomElement(['active', 'outstock', 'inactive']),
        ];
    }

    /**
     * Məhsul yarandıqdan sonra tərcümələrini də avtomatik yaradırıq
     */
    public function configure()
    {
        return $this->afterCreating(function (Product $product) {
            $locales = ['az', 'en', 'ru'];

            foreach ($locales as $locale) {
                ProductTranslate::create([
                    'product_id'  => $product->id,
                    'locale'      => $locale,
                    'title'       => $this->faker->sentence(3) . " ($locale)",
                    'description' => $this->faker->paragraph(),
                ]);
            }
        });
    }
}
