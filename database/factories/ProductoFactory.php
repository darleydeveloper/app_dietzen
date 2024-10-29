<?php

namespace Database\Factories;

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
    public function definition(): array
    {
        return [
            'nombre'=> fake()->word(),
            'imagen'=> fake()->text(),
            'descripcion'=> fake()->text(),
            'precio'=> fake()->numberBetween(10000, 500000),
            'tiempo_de_entrega'=> fake()->numberBetween(1, 30),
            'informacion_adicional'=> fake()->text(),
            'etiqueta1'=> fake()->word(),
            'etiqueta2'=> fake()->word(),
            'categoria_id'-> fake()->numberBetween(1, 10)
        ];
    }
}
