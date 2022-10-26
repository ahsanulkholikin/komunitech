<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\KomunitasUser>
 */
class KomunitasUserFactory extends Factory
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
            'created_at' => $date,
            'updated_at' => $date,
        ];
    }
}
