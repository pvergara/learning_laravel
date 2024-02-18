<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AddAdmin extends Seeder
{
    const USERS = 'users';

    /**x
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table(self::USERS)->insert(
            [
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => Hash::make('admin')
            ]);
    }
}
