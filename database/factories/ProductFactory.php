<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'uuid' => (string) Str::uuid(),
            'slug' => $this->faker->unique()->slug,
            'sku' => $this->faker->unique()->bothify('SKU-###??'),
            // 'barcode' => $this->faker->unique()->ean13,
            'name' => $this->faker->words(3, true),
            'description' => $this->faker->paragraph,
            'manufacturer_code' => $this->faker->bothify('MAN-###??'),
            'image' => $this->faker->imageUrl(640, 480, 'products'),
            'image_url' => $this->faker->url,
            'price' => $this->faker->randomFloat(2, 10, 1000),
            'discount' => $this->faker->randomFloat(2, 0, 50),
            'apply_discount' => $this->faker->boolean,
            'featured' => $this->faker->boolean,
            'length' => $this->faker->randomFloat(2, 1, 100),
            'width' => $this->faker->randomFloat(2, 1, 100),
            'height' => $this->faker->randomFloat(2, 1, 100),
            'volume' => $this->faker->randomFloat(2, 1, 100),
            'weight' => $this->faker->randomFloat(2, 0.1, 50),
            'publication_status' => $this->faker->randomElement(['published', 'draft']),
            'business_line_id' => \App\Models\BusinessLine::inRandomOrder()->first()->id,
            'brand_id' => \App\Models\Brand::inRandomOrder()->first()->id,
            'subgroup_id' => \App\Models\Subgroup::inRandomOrder()->first()->id,
            'published_at' => $this->faker->optional()->dateTime,
        ];
    }
}
