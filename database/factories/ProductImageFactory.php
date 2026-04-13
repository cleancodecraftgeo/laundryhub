<?php

namespace Database\Factories;

use App\Models\ProductImage;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductImage>
 */
class ProductImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

protected $model = ProductImage::class;

    public function definition(): array
    {
        $randomId = $this->faker->numberBetween(1, 1000);

        return [
            'src' => "https://picsum.photos/id/{$randomId}/800/600",
            'type' => 'image/jpeg',
            'size' => $this->faker->numberBetween(102400, 1048576),
            'is_thumb' => false,
        ];
    }


}
