<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'User1',
                'email' => 'user1@igeargeek.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$W/Q8IeUhKkd90zNDPfzWhO01WpWMoIxsB9r41JXXFNiFQw0p9PoFO',
                'remember_token' => NULL,
                'created_at' => '2019-04-12 11:27:02',
                'updated_at' => '2019-04-12 11:27:02',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'User2',
                'email' => 'user2@igeargeek.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Opuaq4Po2PKm4PHXVP/c5eVpcjwYR0tcJ7K.bSTKBIV2o0oZiA.E6',
                'remember_token' => NULL,
                'created_at' => '2019-04-12 11:27:38',
                'updated_at' => '2019-04-12 11:27:38',
            ),
        ));
        
        
    }
}