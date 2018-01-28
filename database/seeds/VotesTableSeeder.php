<?php

use Illuminate\Database\Seeder;

class VotesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('votes')->delete();
        
        
        
    }
}