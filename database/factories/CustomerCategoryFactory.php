<?php

namespace Database\Factories;

use App\Models\CustomerCategory;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CustomerCategory>
 */
class CustomerCategoryFactory extends Factory
{
    protected $model = CustomerCategory::class;
    
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->words(2, true), // Nombre único de la categoría
            'slug' => Str::slug($this->faker->unique()->words(2, true)),
            'status' => $this->faker->randomElement(['activo', 'inactivo']), // Estado de la categoría
        ];
    }
}
