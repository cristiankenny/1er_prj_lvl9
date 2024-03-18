<?php

namespace Database\Factories;

use App\Models\CategoriaProducto;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre' => fake('es_ES')->sentence(2),
            'categoria_id' => CategoriaProducto::all()->random()->id,
            'stock_actual' => fake()->numerify('###'),
            'stock_minimo' => fake()->numerify('###'),
            'precio_unitario' => fake()->numberBetween($min=0.50, $max=1000000),
        ];
    }
}
