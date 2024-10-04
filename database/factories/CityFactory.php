<?php

namespace Database\Factories;

use App\Models\City;
use App\Models\State;
use App\Models\Country;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\City>
 */
class CityFactory extends Factory
{
    protected $model = City::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $state = State::inRandomOrder()->first();
        $country = Country::find($state->country_id);

        return [
            'name' => $this->faker->city(),
            'country_id' => $country->id,
            'state_id' => $state->id,
            'country_code' => $country->iso2,
            'state_code' => $state->state_code,
            'latitude' => $this->faker->latitude(),
            'longitude' => $this->faker->longitude(),
            'status' => $this->faker->randomElement(['active', 'inactive']),
        ];
    }
}
