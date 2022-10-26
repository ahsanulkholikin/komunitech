<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            for ($j = 1; $j <= 10; $j++) {
                if (mt_rand(0, 1)) {
                    \App\Models\Post::factory()->create([
                        'komunitas_id' => $i,
                        'user_id' => $j,
                    ]);
                }
            }
        }
    }
}
