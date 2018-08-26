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
        // DB::table('users')->insert([
        //     'name' => 'Admin',
        //     'username' => 'admin',
        //     'password' => bcrypt('203203')
        // ]);

        $user = new User;
        $user->name = 'Admin';
        $user->email = 'admin@home.net';
        $user->password = bcrypt('203203');
        $user->save();
    
    }
}
