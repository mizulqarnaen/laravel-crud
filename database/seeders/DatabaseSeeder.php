<?php

namespace Database\Seeders;

use App\Models;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        \App\Models\User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin')
        ]);

        Models\Customer::factory(10)->create();
        Models\Transaction::factory(20)->create();
    }
}
