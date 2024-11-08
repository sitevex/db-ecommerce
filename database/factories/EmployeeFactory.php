<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    protected $model = Employee::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => \App\Models\User::all()->random()->id,  // ID de usuario existente
            'department_id' => \App\Models\Department::all()->random()->id,  // ID de departamento existente
            'nui' => $this->faker->unique()->numerify('##########'),  // NUI (Número Único de Identificación)
            'id_type' => \App\Models\IdentificationType::all()->random()->id,
            // 'id_type' => $this->faker->randomElement(['Cedula', 'RUC']),  // Tipo de ID
            'name' => $this->faker->firstName(),  // Nombre
            'lastname' => $this->faker->lastName(),  // Apellido
            'image' => $this->faker->imageUrl(),  // Imagen (opcional)
            'gender' => $this->faker->randomElement(['male', 'female']),  // Género
            'birthdate' => $this->faker->date('Y-m-d', '2002-01-01'),  // Fecha de nacimiento
            'age' => $this->faker->numberBetween(18, 65),  // Edad
            'position' => $this->faker->jobTitle(),  // Posición
            'hire_date' => $this->faker->date('Y-m-d', '2022-01-01'),  // Fecha de contratación
            'address' => $this->faker->address(),  // Dirección
            'phone_one' => $this->faker->phoneNumber(),  // Teléfono 1
            'phone_two' => $this->faker->optional()->phoneNumber(),  // Teléfono 2 (opcional)
            'staff_email' => $this->faker->optional()->safeEmail(),  // Email personal (opcional)
            'work_email' => $this->faker->unique()->safeEmail(),  // Email de trabajo
            'contact_name' => $this->faker->optional()->name(),  // Nombre del contacto de emergencia
            'contact_relationship' => $this->faker->optional()->randomElement(['Amigo', 'Familiar', 'Pareja']),  // Relación del contacto
            'contact_phone_one' => $this->faker->optional()->phoneNumber(),  // Teléfono de contacto 1
            'contact_phone_two' => $this->faker->optional()->phoneNumber(),  // Teléfono de contacto 2 (opcional)
            'status' => $this->faker->randomElement(['active', 'inactive']),  // Estado
            'marital_status_id' => \App\Models\MaritalStatus::all()->random()->id,  // Estado civil existente
            'city_id' => \App\Models\City::all()->random()->id,  // ID de ciudad existente
            'state_id' => \App\Models\State::all()->random()->id,  // ID de estado existente
            'country_id' => \App\Models\Country::all()->random()->id,  // ID de país existente
        ];
    }
}
