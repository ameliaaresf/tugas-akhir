<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        $admin->assignRole('Admin');

        $kepaladesa = User::create([
            'name' => 'kepaladesa',
            'email' => 'kepaladesa@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        $kepaladesa->assignRole('kepaladesa');
    }
}
