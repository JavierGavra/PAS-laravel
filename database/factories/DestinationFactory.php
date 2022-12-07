<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Destination>
 */
class DestinationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'tujuan' => fake()->city(),
            'id_wilayah' => mt_rand(1,3),
            'id_biro' => mt_rand(1,3),
            'deskripsi' => fake()->sentence(mt_rand(10,20)),
            'harga' => fake()->randomFloat(2, 0, 1000000),
            'gambar_tujuan' => fake()->randomElement(['images/img-1.jpg', 'images/img-2.jpg', 'images/img-3.jpg', 'images/img-4.jpg', 'images/img-5.jpg'])
        ];
    }
}
