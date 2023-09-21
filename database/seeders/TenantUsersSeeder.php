<?php

namespace Database\Seeders;
use Faker\Generator as Faker;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TenantUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $tenants = DB::table('tenants')->get();


        foreach ($tenants as $tenant) {
            for ($i = 0; $i < 100; $i++) {
                $email = fake()->unique()->safeEmail;
                \App\Models\User::create([
                    'name' => fake()->name(),
                    'email' => $email,
                    'password' => bcrypt('123456789'),
                    'ApiKey' => $tenant->ApiKey,
                ]);
            }
    }
    }
}
