<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'asad',
            'email' => 'assadzafar4@gmail.com',
             'email_verified_at' => NULL,
              'password' => bcrypt('secret'),
               'remember_token'=> NULL,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
            'name' => 'jack',
            'email' => 'jackzafar4@gmail.com',
             'email_verified_at' => NULL,
              'password' => bcrypt('secret'),
               'remember_token'=> NULL,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        
   }
    
}
