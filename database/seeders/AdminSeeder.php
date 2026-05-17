<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admins = [
            [
                'name' => 'admin01',
                'email' => 'admin01@misjhon.com',
                'password' => Hash::make('password123'),
                'role' => 'admin',
                'telefono' => '123456789',
                'direccion' => 'Central',
                'region' => 'Lima',
            ],
            [
                'name' => 'admin02',
                'email' => 'admin02@misjhon.com',
                'password' => Hash::make('password123'),
                'role' => 'admin',
                'telefono' => '123456789',
                'direccion' => 'Central',
                'region' => 'Lima',
            ],
            [
                'name' => 'admin03',
                'email' => 'admin03@misjhon.com',
                'password' => Hash::make('password123'),
                'role' => 'admin',
                'telefono' => '123456789',
                'direccion' => 'Central',
                'region' => 'Lima',
            ],
        ];

        foreach ($admins as $admin) {
            User::updateOrCreate(['email' => $admin['email']], $admin);
        }
    }
}
