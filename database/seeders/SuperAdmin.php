<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SuperAdmin extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::create([
            'name' => 'Test Super Admin',
            'email' => 'test@example.com',
            'password' => bcrypt('123456789'),
            'SuperAdmin' => 1,
        ]);
    }
}
