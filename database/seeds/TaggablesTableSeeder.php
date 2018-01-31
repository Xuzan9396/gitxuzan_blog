<?php

use Illuminate\Database\Seeder;

class TaggablesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('taggables')->delete();
        
        \DB::table('taggables')->insert(array (
            0 => 
            array (
                'tag_id' => 5,
                'taggable_id' => 21,
                'taggable_type' => 'discussions',
            ),
            1 => 
            array (
                'tag_id' => 6,
                'taggable_id' => 20,
                'taggable_type' => 'articles',
            ),
            2 => 
            array (
                'tag_id' => 6,
                'taggable_id' => 21,
                'taggable_type' => 'articles',
            ),
            3 => 
            array (
                'tag_id' => 10,
                'taggable_id' => 22,
                'taggable_type' => 'articles',
            ),
            4 => 
            array (
                'tag_id' => 9,
                'taggable_id' => 22,
                'taggable_type' => 'articles',
            ),
            5 => 
            array (
                'tag_id' => 6,
                'taggable_id' => 23,
                'taggable_type' => 'articles',
            ),
            6 => 
            array (
                'tag_id' => 11,
                'taggable_id' => 23,
                'taggable_type' => 'articles',
            ),
            7 => 
            array (
                'tag_id' => 6,
                'taggable_id' => 24,
                'taggable_type' => 'articles',
            ),
            8 => 
            array (
                'tag_id' => 15,
                'taggable_id' => 24,
                'taggable_type' => 'articles',
            ),
            9 => 
            array (
                'tag_id' => 6,
                'taggable_id' => 25,
                'taggable_type' => 'articles',
            ),
            10 => 
            array (
                'tag_id' => 7,
                'taggable_id' => 25,
                'taggable_type' => 'articles',
            ),
            11 => 
            array (
                'tag_id' => 9,
                'taggable_id' => 25,
                'taggable_type' => 'articles',
            ),
            12 => 
            array (
                'tag_id' => 13,
                'taggable_id' => 25,
                'taggable_type' => 'articles',
            ),
            13 => 
            array (
                'tag_id' => 15,
                'taggable_id' => 25,
                'taggable_type' => 'articles',
            ),
            14 => 
            array (
                'tag_id' => 14,
                'taggable_id' => 25,
                'taggable_type' => 'articles',
            ),
            15 => 
            array (
                'tag_id' => 17,
                'taggable_id' => 25,
                'taggable_type' => 'articles',
            ),
            16 => 
            array (
                'tag_id' => 12,
                'taggable_id' => 25,
                'taggable_type' => 'articles',
            ),
            17 => 
            array (
                'tag_id' => 16,
                'taggable_id' => 25,
                'taggable_type' => 'articles',
            ),
            18 => 
            array (
                'tag_id' => 10,
                'taggable_id' => 25,
                'taggable_type' => 'articles',
            ),
            19 => 
            array (
                'tag_id' => 18,
                'taggable_id' => 25,
                'taggable_type' => 'articles',
            ),
            20 => 
            array (
                'tag_id' => 12,
                'taggable_id' => 26,
                'taggable_type' => 'articles',
            ),
            21 => 
            array (
                'tag_id' => 10,
                'taggable_id' => 27,
                'taggable_type' => 'articles',
            ),
            22 => 
            array (
                'tag_id' => 9,
                'taggable_id' => 27,
                'taggable_type' => 'articles',
            ),
            23 => 
            array (
                'tag_id' => 6,
                'taggable_id' => 28,
                'taggable_type' => 'articles',
            ),
            24 => 
            array (
                'tag_id' => 14,
                'taggable_id' => 28,
                'taggable_type' => 'articles',
            ),
            25 => 
            array (
                'tag_id' => 7,
                'taggable_id' => 29,
                'taggable_type' => 'articles',
            ),
            26 => 
            array (
                'tag_id' => 6,
                'taggable_id' => 29,
                'taggable_type' => 'articles',
            ),
            27 => 
            array (
                'tag_id' => 19,
                'taggable_id' => 29,
                'taggable_type' => 'articles',
            ),
            28 => 
            array (
                'tag_id' => 20,
                'taggable_id' => 30,
                'taggable_type' => 'articles',
            ),
            29 => 
            array (
                'tag_id' => 20,
                'taggable_id' => 31,
                'taggable_type' => 'articles',
            ),
            30 => 
            array (
                'tag_id' => 9,
                'taggable_id' => 31,
                'taggable_type' => 'articles',
            ),
            31 => 
            array (
                'tag_id' => 7,
                'taggable_id' => 32,
                'taggable_type' => 'articles',
            ),
            32 => 
            array (
                'tag_id' => 19,
                'taggable_id' => 32,
                'taggable_type' => 'articles',
            ),
        ));
        
        
    }
}