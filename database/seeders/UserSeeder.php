<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        \App\Models\User::factory(19)->create();

        \App\Models\User::create([
            'name' => 'Admin Andri',
            'email' => 'andrific11@gmail.com',
            'password' => Hash::make('P@ssw0rd'),
            'roles' => 'ADMIN',
            'phone' => '081398832830',
        ]);
    }
}
