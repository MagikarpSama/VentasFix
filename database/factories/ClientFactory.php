<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    protected $model = Client::class;

    public function definition(): array
    {
        return [
            'rut_empresa' => $this->faker->unique()->bothify('########-#'),
            'rubro' => $this->faker->word(),
            'razon_social' => $this->faker->company(),
            'telefono' => $this->faker->phoneNumber(),
            'direccion' => $this->faker->address(),
            'nombre_contacto' => $this->faker->name(),
            'email_contacto' => $this->faker->unique()->safeEmail(),
        
        ];
    }
}
