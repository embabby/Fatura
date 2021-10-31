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
        $defined_users = [
            [
                'name' => 'Normal User',
                'email' => 'normal@user.com',
                'password' => bcrypt('normal'),
                'role' => 'user',
            ],
            [
                'name' => 'Admin User',
                'email' => 'admin@user.com',
                'password' => bcrypt('admin'),
                'role' => 'admin',
            ],
        ];

        foreach($defined_users as $defined_user) {
            $user = new User();
            $user->name = $defined_user['name'];
            $user->email = $defined_user['email'];
            $user->password = $defined_user['password'];
            $user->role = $defined_user['role'];
            $user->save();
        }
    }
}
