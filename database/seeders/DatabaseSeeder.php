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
        $user = User::firstOrCreate([
            'name' => 'Super Admin',
            'email' => 'superadmin@grapetechnologies.co',
        ], [
            'password' => Hash::make('super@123')
        ]);

        $token = $user->createToken('master');

        dump("Your token is : $token->plainTextToken");
    }
}
