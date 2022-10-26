<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\PostVote;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'username' => 'user', // password: password
        ]);

        \App\Models\User::factory(10)->create();
        \App\Models\Komunitas::factory(10)->create();

        $this->call([
            KomunitasAdminSeeder::class,
            KomunitasUserSeeder::class,
            PostSeeder::class,
            PostMediaSeeder::class,
            PostCommentSeeder::class,
            PostVoteSeeder::class,
        ]);
    }
}
