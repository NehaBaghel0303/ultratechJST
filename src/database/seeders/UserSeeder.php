<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([ 
            'id' => 1,
            'name' => "Neha",
            'email' => "nehabaghel0303@gmail.com",
            'password' => Hash::make("Neha@1234"),
            'phone' => "7024797677",
            'created_at' => now(),
        ]);
    }
}
