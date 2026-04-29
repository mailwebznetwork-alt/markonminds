<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SuperadminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'mail.webznetwork@gmail.com'],
            [
                'name' => 'WDJERRIE',
                'password' => Hash::make('aDMN@55005'),
            ]
        );
    }
}
