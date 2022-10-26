<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $judul = fake()->unique()->sentence;
        $date = fake()->dateTimeBetween('-1 week', 'now', 'Asia/Jakarta');

        return [
            'judul' => $judul,
            'slug' => Str::substr(Str::slug($judul, '_'), 0, 64),
            'konten' => fake()->text(),
            'created_at' => $date,
            'updated_at' => $date,
        ];
    }
}
