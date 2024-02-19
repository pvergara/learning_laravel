<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(AddArtist::class);
        $this->call(AddSongs::class);
        $this->call(AddAdmin::class);
    }
}
