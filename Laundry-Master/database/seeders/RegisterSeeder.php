<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class RegisterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'first_name' => 'user',
            'last_name' => 'customer',
            'no_hp' => '085157772505',
            'email' => 'user@gmail.com',
            'password' => Hash::make('user'),
        ]);

        User::create([
            'first_name' => 'pegawai',
            'last_name' => 'admin',
            'no_hp' => '085157772505',
            'email' => 'admin@gmail.com',
            'is_admin' => true,
            'password' => Hash::make('admin'),
        ]);
    }
}