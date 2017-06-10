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
           'surname'=>'Иванов',
           'name'=>'Иван',
           'middle_name'=>'Иванович',
           'email'=>'ivanov@test.test',
            'password'=>bcrypt('123123'),
           'phone'=>'0981111111',
        ]);

        User::create([
            'surname'=>'Петров',
            'name'=>'Петр',
            'middle_name'=>'Петрович',
            'email'=>'petrov@test.test',
            'password'=>bcrypt('123123'),
            'phone'=>'0982222222',
        ]);

        User::create([
            'surname'=>'Николаев',
            'name'=>'Николай',
            'middle_name'=>'Николаевич',
            'email'=>'nikoladi@test.test',
            'password'=>bcrypt('123123'),
            'phone'=>'0983333333',
        ]);

    }
}
