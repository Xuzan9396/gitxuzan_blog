<?php

use Illuminate\Database\Seeder;

class FollowersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('followers')->delete();
        
        
        
    }
}