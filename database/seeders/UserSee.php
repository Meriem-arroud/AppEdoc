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
            'nom'=>'Super',
            'prenom'=>'Admin',
            'département'=>'management',
            'email'=>'sup.admin@gmail.com',
            'password'=>Hash::make('0000')
            ]);
            DB::table('users')->insert([
                'nom'=>'Saadoune',
                'prenom'=>'Soukaina',
                'département'=>'management',
                'email'=>'s.saadoune@gmail.com',
                'password'=>Hash::make('1234')
                ]);
            DB::table('users')->insert([
             'nom'=>'Arroud',
             'prenom'=>'Meriem',
             'département'=>'informatique',
             'email'=>'m.arroud@gmail.com',
             'password'=>Hash::make('5678')
             ]);
             DB::table('users')->insert([
                 'nom'=>'Belmir',
                 'prenom'=>'Asmae',
                 'département'=>'comptabilité',
                 'email'=>'a.belmir@gmail.com',
                 'password'=>Hash::make('9012')
                 ]);
                 DB::table('users')->insert([
                     'nom'=>'Benayad',
                     'prenom'=>'Chaymae',
                     'département'=>'informatique',
                     'email'=>'c.benayad@gmail.com',
                     'password'=>Hash::make('2233')
                     ]);
                
    }
}
