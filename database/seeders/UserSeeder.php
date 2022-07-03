<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
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
        $users = [
            [
                'lname' => 'Genita',
                'fname' => 'Louei',
                'username' => 'louei',
                'password' => bcrypt('123'),
                'email' => 'louei@gmail.com',
                'email_verified_at' => Carbon::now()
            ],
            [
                'lname' => 'Curry',
                'fname' => 'Stephen',
                'username' => 'curry',
                'password' => bcrypt('123'),
                'email' => 'stephcurry@gmail.com',
                'email_verified_at' => Carbon::now()
            ],
        ];

        foreach($users as $user) {
            User::create($user);
        }
    }
}
