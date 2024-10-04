<?php

namespace Database\Factories;

use App\Models\Supplier;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Supplier>
 */
class SupplierFactory extends Factory
{
    protected $model = Supplier::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->company(), // Nombre de la compañía
            'tax_id' => $this->faker->unique()->numerify('##########'), // ID único fiscal
            'provider_type' => $this->faker->randomElement(['Hardware', 'Software', 'Networking', 'Cloud Services']), // Tipo de proveedor
            'address' => $this->faker->address(), // Dirección de proveedor
            'phone_one' => $this->faker->phoneNumber(), // Primer número de teléfono
            'phone_two' => $this->faker->optional()->phoneNumber(), // Segundo número de teléfono (puede ser nulo)
            'email' => $this->faker->unique()->companyEmail(), // Correo electrónico
            'website' => $this->faker->optional()->domainName(), // Sitio web (puede ser nulo)
            'contact_name' => $this->faker->name(), // Nombre de contacto
            'contact_position' => $this->faker->jobTitle(), // Cargo del contacto
            'payment_method' => $this->faker->randomElement(['Transferencia', 'Cheque', 'Tarjeta de crédito']), // Método de pago
            'payment_terms' => $this->faker->randomElement(['Net 30', 'Net 60', 'Net 90']), // Condiciones de pago
            'currency' => $this->faker->currencyCode(), // Código de moneda
            'shipping_terms' => $this->faker->sentence(), // Términos de envío
            'return_policy' => $this->faker->sentence(), // Política de devolución
            'status' => $this->faker->randomElement(['active', 'inactive', 'pending', 'suspended', 'retired']), // Estado
            'city_id' => \App\Models\City::inRandomOrder()->first()->id, // ID de ciudad aleatoria
            'state_id' => \App\Models\State::inRandomOrder()->first()->id, // ID de estado aleatorio
            'country_id' => \App\Models\Country::inRandomOrder()->first()->id, // ID de país aleatorio
            'user_id' => \App\Models\User::inRandomOrder()->first()->id, // ID de usuario aleatorio
        ];
    }
}
