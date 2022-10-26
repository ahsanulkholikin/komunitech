<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PostComment>
 */
class PostCommentFactory extends Factory
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
            'komentar' => fake()->paragraph(1),
            'created_at' => $date,
            'updated_at' => $date,
        ];
    }
}
