<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddArtist extends Seeder
{
    const ARTIST = 'artist';

    /**x
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table(self::ARTIST)->insert(
            [
                'id' => '1',
                'name' => 'Mike Oldfield',
            ]);
        DB::table(self::ARTIST)->insert(
            [
                'id' => '2',
                'name' => 'Haken',
            ]);
    }
}
