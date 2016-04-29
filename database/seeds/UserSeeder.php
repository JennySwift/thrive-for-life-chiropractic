<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $jenny = User::create([
            'name' => 'Jenny',
            'email' => 'cheezyspaghetti@gmail.com',
            'password' => bcrypt(env('DEV_PASSWORD'))
        ]);
    }
}
