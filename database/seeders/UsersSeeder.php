<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            //admin
            [
            'name'=>'mofasser',
            'password' => Hash::make('1111'),
            'email' =>'mofasserrakib@gmail.com',
            'role' =>'admin',

            ],
            [
                //cashier
                'name'=>'chashier',
                'password' => Hash::make('11111'),
                'email' =>'chashier@gmail.com',
                'role' =>'chashier',

            ],

        ]);
    }
}
