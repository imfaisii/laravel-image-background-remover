<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $token = User::firstOrCreate([
            'name' => 'Super Admin',
            'email' => 'superadmin@grapetechnologies.co',
        ], [
            'password' => Hash::make('super@123')
        ]);

        echo $token->plainTextToken;
    }
}
