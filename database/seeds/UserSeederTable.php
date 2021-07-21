<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'administrasi',
                'email' => 'admin@mail.com',
                'password' => bcrypt('password')
            ]
        ];
    foreach ($users as $key => $user) {
        User::create($user);
    }
    }

}
