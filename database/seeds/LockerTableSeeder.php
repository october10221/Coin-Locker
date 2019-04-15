<?php

use Illuminate\Database\Seeder;

class LockerTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('locker')->delete();
        
        \DB::table('locker')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name_locker' => 1,
                'size' => 0,
                'status_locker' => 0,
                'date_start' => '2019-04-14 18:11:22',
                'date_end' => '2019-04-15 01:11:22',
                'renter' => '0',
            ),
            1 => 
            array (
                'id' => 2,
                'name_locker' => 2,
                'size' => 1,
                'status_locker' => 0,
                'date_start' => '2019-04-14 09:55:45',
                'date_end' => '2019-04-14 10:55:45',
                'renter' => '0',
            ),
            2 => 
            array (
                'id' => 3,
                'name_locker' => 3,
                'size' => 2,
                'status_locker' => 0,
                'date_start' => NULL,
                'date_end' => NULL,
                'renter' => '',
            ),
            3 => 
            array (
                'id' => 4,
                'name_locker' => 4,
                'size' => 0,
                'status_locker' => 0,
                'date_start' => NULL,
                'date_end' => NULL,
                'renter' => '',
            ),
            4 => 
            array (
                'id' => 5,
                'name_locker' => 5,
                'size' => 1,
                'status_locker' => 0,
                'date_start' => NULL,
                'date_end' => NULL,
                'renter' => '',
            ),
            5 => 
            array (
                'id' => 6,
                'name_locker' => 6,
                'size' => 2,
                'status_locker' => 0,
                'date_start' => NULL,
                'date_end' => NULL,
                'renter' => '',
            ),
            6 => 
            array (
                'id' => 7,
                'name_locker' => 7,
                'size' => 0,
                'status_locker' => 0,
                'date_start' => NULL,
                'date_end' => NULL,
                'renter' => '',
            ),
            7 => 
            array (
                'id' => 8,
                'name_locker' => 8,
                'size' => 1,
                'status_locker' => 0,
                'date_start' => NULL,
                'date_end' => NULL,
                'renter' => '',
            ),
            8 => 
            array (
                'id' => 9,
                'name_locker' => 9,
                'size' => 2,
                'status_locker' => 0,
                'date_start' => NULL,
                'date_end' => NULL,
                'renter' => '',
            ),
            9 => 
            array (
                'id' => 10,
                'name_locker' => 10,
                'size' => 0,
                'status_locker' => 0,
                'date_start' => NULL,
                'date_end' => NULL,
                'renter' => '',
            ),
            10 => 
            array (
                'id' => 11,
                'name_locker' => 11,
                'size' => 1,
                'status_locker' => 0,
                'date_start' => NULL,
                'date_end' => NULL,
                'renter' => '',
            ),
            11 => 
            array (
                'id' => 12,
                'name_locker' => 12,
                'size' => 2,
                'status_locker' => 0,
                'date_start' => NULL,
                'date_end' => NULL,
                'renter' => '',
            ),
        ));
        
        
    }
}