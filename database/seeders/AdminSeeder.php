<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Add default admin user. You can use credentials below to sign-in in the dashboard
     */
    public function run()
    {
        User::factory()->create([
            'name' => 'Admin',
            'email'=> 'admin@medisonmedia.com',
            'password' => Hash::make('Aa123456'),
        ]);
    }
}
