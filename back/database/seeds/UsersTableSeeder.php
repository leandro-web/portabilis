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
            'name' => 'Leandro Oliveira',
            'email' => 'admin@admin.com',
            'password' => bcrypt('123456'),
            'admin' => 1,
            'active' => 1
        ]);
    }
}
