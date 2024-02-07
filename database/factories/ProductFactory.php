<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->randomElement([
                'Nasi Goreng', 'Sate Ayam', 'Rendang', 'Nasi Uduk', 'Soto Ayam',
                'Gado-Gado', 'Mie Goreng', 'Nasi Padang', 'Pecel Lele', 'Bakso',
                'Es Teh Manis', 'Es Jeruk', 'Kopi Tubruk', 'Cendol', 'Jus Alpukat',
                'Martabak Manis', 'Ketoprak', 'Siomay', 'Kue Lumpur', 'Bakwan',
                'Keripik Singkong', 'Keripik Pisang', 'Perkedel Jagung', 'Martabak Telor',
                'Lumpia Semarang', 'Klepon', 'Pisang Goreng', 'Klepon',
            ]),
            'description' => $this->faker->text,
            'price' => $this->faker->numberBetween(10000, 100000),
            'stock' => $this->faker->numberBetween(1, 100),
            'category' => $this->faker->randomElement(['FOOD', 'DRINK', 'SNACK']),
            'image' => $this->faker->imageUrl(),
        ];
    }
}
