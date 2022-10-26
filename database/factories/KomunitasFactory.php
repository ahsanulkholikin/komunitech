<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Komunitas>
 */
class KomunitasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $nama = fake()->unique()->jobTitle;
        
        return [
            'nama' => $nama,
            'deskripsi' => fake()->text(),
            'logo' => 'https://picsum.photos/128/128?random=' . rand(1, 1000),
            'banner' => 'https://picsum.photos/1000/100?random=' . rand(1, 1000),
            'slug' => Str::substr(Str::slug($nama, '_'), 0, 21),
        ];
    }
}
