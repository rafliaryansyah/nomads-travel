<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'ADMIN',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
            'roles' => 'ADMIN',
            'username' => 'admin',
            'email_verified_at' => now()
        ]);

        User::create([
            'name' => 'John Doe',
            'email' => 'johndoe@gmail.com',
            'password' => bcrypt('123456'),
            'roles' => 'USER',
            'username' => 'johndoe',
            'email_verified_at' => now()
        ]);
    }
}
