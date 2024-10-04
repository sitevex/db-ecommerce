<?php

namespace Database\Factories;

use App\Models\Country;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Country>
 */
class CountryFactory extends Factory
{
    protected $model = Country::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->country(),
            'iso3' => strtoupper($this->faker->lexify('???')),  // Generar un código aleatorio de 3 letras
            'iso2' => $this->faker->countryCode(),  // Código ISO de 2 caracteres
            'numeric_code' => $this->faker->numberBetween(100, 999),
            'phone_code' => $this->faker->numberBetween(1, 999),
            'capital' => $this->faker->city(),
            'region' => $this->faker->word(),  // Puedes personalizar con una región si lo prefieres
            'latitude' => $this->faker->latitude(),
            'longitude' => $this->faker->longitude(),
            'status' => $this->faker->randomElement(['active', 'inactive']),
        ];
    }
}
