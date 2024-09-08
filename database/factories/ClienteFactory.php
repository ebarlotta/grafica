<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cliente>
 */
class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'nombre' => $this->faker->nombre, // Genera un nombre falso
            'email' => $this->faker->unique()->safeEmail, // Genera un correo electrónico único
            'telefono' => $this->faker->phoneNumber, // Genera un número de teléfono falso
            'direccion' => $this->faker->address, // Genera una dirección falsa
            'geoposicion' => $this->faker->latitude . ',' . $this->faker->longitude, // Genera una geoposición (latitud y longitud)
            'organizacion' => $this->faker->company, // Genera el nombre de una empresa falsa
        ];
    }
}
