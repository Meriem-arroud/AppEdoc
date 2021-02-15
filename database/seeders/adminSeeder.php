<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('admin')->insert([
            'nom'=>'naim',
            'prenom'=>'mehdi',
            
            'email'=>'m.naim@gmail.com',
            'password'=>Hash::make('2233')
            ]); 
    }
}
