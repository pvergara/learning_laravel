<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddSongs extends Seeder
{
    const SONGS = 'song';

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table(self::SONGS)->insert(
            [
                'name' => 'taurus',
                'artist_id' => '1',
                'album' => 'crises',
                'year' => '1989'
            ]);
    }
}
