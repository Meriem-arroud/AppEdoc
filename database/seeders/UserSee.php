<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UserSee extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('users')->insert([
           'nom'=>'mardi',
           'prenom'=>'youssef',
           'département'=>'management',
           'email'=>'y.mardi@gmail.com',
           'password'=>Hash::make('1234')
           ]);
           DB::table('users')->insert([
            'nom'=>'qadmiri',
            'prenom'=>'nouhaila',
            'département'=>'informatique',
            'email'=>'n.qadmiri@gmail.com',
            'password'=>Hash::make('5678')
            ]);
            DB::table('users')->insert([
                'nom'=>'moustatir',
                'prenom'=>'yassine',
                'département'=>'comptabilité',
                'email'=>'y.moustatir@gmail.com',
                'password'=>Hash::make('9012')
                ]);
    }
}
