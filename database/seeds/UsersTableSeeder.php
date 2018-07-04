<?php

use App\User;
use Illuminate\Database\Seeder;

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
            'name' => 'Jenny',
            'email' => 'cheezyspaghetti@gmail.com',
            'password' => bcrypt('abcdefg'),
        ]);
    }
}
