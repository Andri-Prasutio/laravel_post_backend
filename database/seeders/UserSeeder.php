<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use \App\Models\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        User::factory(19)->create();

        User::create([
            'name' => 'Admin Andri',
            'email' => 'andrific11@gmail.com',
            'password' => Hash::make('P@ssw0rd'),
            'roles' => 'Admin',
            'phone' => '081398832830',
        ]);
    }
}
