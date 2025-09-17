<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition(): array
    {
        return [
            'sku' => $this->faker->unique()->bothify('SKU-####'),
            'nombre' => $this->faker->word(),
            'descripcion_corta' => $this->faker->sentence(6),
            'descripcion_larga' => $this->faker->paragraph(2),
            'imagen' => $this->faker->imageUrl(640, 480, 'technics'),
            'precio_neto' => $this->faker->randomFloat(2, 1000, 10000),
            'precio_venta' => $this->faker->randomFloat(2, 1200, 12000),
            'stock_actual' => $this->faker->numberBetween(0, 100),
            'stock_minimo' => $this->faker->numberBetween(0, 10),
            'stock_bajo' => $this->faker->numberBetween(0, 20),
            'stock_alto' => $this->faker->numberBetween(50, 200),
        ];
    }
}
