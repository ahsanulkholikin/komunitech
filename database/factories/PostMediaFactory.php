<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PostMedia>
 */
class PostMediaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $date = fake()->dateTimeBetween('-1 week', 'now', 'Asia/Jakarta');

        return [
            'tipe' => 'gambar',
            'url' => 'https://picsum.photos/1000/1000?random=' . rand(1, 1000),
            'created_at' => $date,
            'updated_at' => $date,
        ];
    }
}
