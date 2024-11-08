<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    protected $model = Customer::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'uuid' => (string) Str::uuid(),
            'user_id' => \App\Models\User::all()->random()->id,  // ID de usuario existente
            'nui' => $this->faker->unique()->numerify('##########'),  // NUI (Número Único de Identificación)
            'id_type' => \App\Models\IdentificationType::all()->random()->id,
            // 'id_type' => $this->faker->randomElement(['Cedula', 'RUC', 'DNI', 'Pasaporte', 'Licencia']),  // Tipo de ID
            'name' => $this->faker->firstName(),  // Nombre
            'lastname' => $this->faker->lastName(),  // Apellido
            'image' => $this->faker->imageUrl(),  // Imagen
            'gender' => $this->faker->randomElement(['male', 'female']),  // Género
            'business_name' => $this->faker->company(),  // Nombre del negocio
            'address' => $this->faker->address(),  // Dirección
            'shipping_address' => $this->faker->address(),  // Dirección de envío
            'business_address' => $this->faker->address(),
            'postal_code' => $this->faker->postcode(),  // Código postal
            'phone_one' => $this->faker->phoneNumber(),  // Teléfono 1
            'phone_two' => $this->faker->optional()->phoneNumber(),  // Teléfono 2 (opcional)
            'email' => $this->faker->unique()->safeEmail(),  // Email comercial
            'commercial_email' => $this->faker->unique()->safeEmail(),  // Email comercial
            'billing_email' => $this->faker->optional()->safeEmail(),  // Email de facturación (opcional)
            'contact_name' => $this->faker->optional()->name(),  // Nombre del contacto (opcional)
            'contact_lastname' => $this->faker->optional()->name(),  // Nombre del contacto (opcional)
            'contact_position' => $this->faker->optional()->jobTitle(),  // Posición del contacto (opcional)
            'contact_phone_one' => $this->faker->optional()->phoneNumber(),  // Teléfono de contacto 1 (opcional)
            'contact_phone_two' => $this->faker->optional()->phoneNumber(),  // Teléfono de contacto 2 (opcional)
            'contact_email' => $this->faker->optional()->email(),  // Email del contacto (opcional)
            'status' => $this->faker->randomElement(['active', 'inactive']),  // Estado
            'customer_category_id' => \App\Models\CustomerCategory::all()->random()->id,  // ID de categoría de cliente existente
            'marital_status_id' => \App\Models\MaritalStatus::all()->random()->id,  // Estado civil existente
            'city_id' => \App\Models\City::all()->random()->id,  // ID de ciudad existente
            'state_id' => \App\Models\State::all()->random()->id,  // ID de estado existente
            'country_id' => \App\Models\Country::all()->random()->id,  // ID de país existente
        ];
    }
}
