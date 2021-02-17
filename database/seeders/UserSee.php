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
            'nom'=>'saadoune',
            'prenom'=>'soukaina',
            'département'=>'management',
            'email'=>'s.saadoune@gmail.com',
            'password'=>Hash::make('1234')
            ]);
            DB::table('users')->insert([
             'nom'=>'arroud',
             'prenom'=>'meriam',
             'département'=>'informatique',
             'email'=>'m.arroud@gmail.com',
             'password'=>Hash::make('5678')
             ]);
             DB::table('users')->insert([
                 'nom'=>'belmir',
                 'prenom'=>'asmaa',
                 'département'=>'comptabilité',
                 'email'=>'a.belmir@gmail.com',
                 'password'=>Hash::make('9012')
                 ]);
                 DB::table('users')->insert([
                     'nom'=>'chaymae',
                     'prenom'=>'benayad',
                     'département'=>'informatique',
                     'email'=>'m.naim@gmail.com',
                     'password'=>Hash::make('2233')
                     ]);
                
    }
}
