<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name = 'Yogi Indragiri';
        $user->email = 'yogi.indragiri@gmail.com';
        $user->password = bcrypt('test123');
        $user->save();
        $user->roles()->attach(Role::where('name', 'user')->first());

        $admin = new User;
        $admin->name = 'Muhammad Yogi';
        $admin->email = 'muhammad.yogi@gmail.com';
        $admin->password = bcrypt('test123');
        $admin->save();
        $admin->roles()->attach(Role::where('name', 'admin')->first());
    }
}
