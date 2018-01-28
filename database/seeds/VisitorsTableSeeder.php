<?php

use Illuminate\Database\Seeder;

class VisitorsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('visitors')->delete();
        
        \DB::table('visitors')->insert(array (
            0 => 
            array (
                'id' => 116,
                'article_id' => 21,
                'ip' => '163.177.136.59',
                'country' => NULL,
                'clicks' => 240,
                'created_at' => '2018-01-23 03:29:00',
                'updated_at' => '2018-01-23 07:27:40',
            ),
            1 => 
            array (
                'id' => 117,
                'article_id' => 21,
                'ip' => '112.96.115.180',
                'country' => NULL,
                'clicks' => 2,
                'created_at' => '2018-01-23 04:16:46',
                'updated_at' => '2018-01-23 04:31:24',
            ),
            2 => 
            array (
                'id' => 118,
                'article_id' => 21,
                'ip' => '112.96.179.131',
                'country' => NULL,
                'clicks' => 15,
                'created_at' => '2018-01-23 04:33:01',
                'updated_at' => '2018-01-23 04:33:19',
            ),
            3 => 
            array (
                'id' => 119,
                'article_id' => 21,
                'ip' => '120.204.17.73',
                'country' => NULL,
                'clicks' => 6,
                'created_at' => '2018-01-23 04:34:01',
                'updated_at' => '2018-01-23 04:34:01',
            ),
            4 => 
            array (
                'id' => 121,
                'article_id' => 23,
                'ip' => '163.177.136.59',
                'country' => NULL,
                'clicks' => 6,
                'created_at' => '2018-01-23 04:51:01',
                'updated_at' => '2018-01-23 07:38:14',
            ),
            5 => 
            array (
                'id' => 122,
                'article_id' => 23,
                'ip' => '120.230.81.60',
                'country' => NULL,
                'clicks' => 8,
                'created_at' => '2018-01-23 14:16:28',
                'updated_at' => '2018-01-24 00:45:06',
            ),
            6 => 
            array (
                'id' => 123,
                'article_id' => 23,
                'ip' => '223.104.174.135',
                'country' => NULL,
                'clicks' => 45,
                'created_at' => '2018-01-23 23:14:19',
                'updated_at' => '2018-01-23 23:14:19',
            ),
            7 => 
            array (
                'id' => 124,
                'article_id' => 21,
                'ip' => '223.104.174.135',
                'country' => NULL,
                'clicks' => 45,
                'created_at' => '2018-01-23 23:14:39',
                'updated_at' => '2018-01-23 23:14:39',
            ),
            8 => 
            array (
                'id' => 125,
                'article_id' => 23,
                'ip' => '58.38.246.125',
                'country' => NULL,
                'clicks' => 45,
                'created_at' => '2018-01-24 00:25:24',
                'updated_at' => '2018-01-24 00:25:24',
            ),
            9 => 
            array (
                'id' => 126,
                'article_id' => 21,
                'ip' => '120.230.81.60',
                'country' => NULL,
                'clicks' => 79,
                'created_at' => '2018-01-24 00:45:20',
                'updated_at' => '2018-01-24 00:45:20',
            ),
            10 => 
            array (
                'id' => 127,
                'article_id' => 24,
                'ip' => '163.177.136.27',
                'country' => NULL,
                'clicks' => 45,
                'created_at' => '2018-01-24 02:22:48',
                'updated_at' => '2018-01-24 02:22:48',
            ),
            11 => 
            array (
                'id' => 128,
                'article_id' => 21,
                'ip' => '163.177.136.27',
                'country' => NULL,
                'clicks' => 45,
                'created_at' => '2018-01-24 02:33:37',
                'updated_at' => '2018-01-24 02:33:37',
            ),
            12 => 
            array (
                'id' => 129,
                'article_id' => 25,
                'ip' => '163.177.136.2',
                'country' => NULL,
                'clicks' => 45,
                'created_at' => '2018-01-24 09:41:48',
                'updated_at' => '2018-01-24 09:41:48',
            ),
            13 => 
            array (
                'id' => 130,
                'article_id' => 27,
                'ip' => '120.230.81.221',
                'country' => NULL,
                'clicks' => 45,
                'created_at' => '2018-01-24 13:54:51',
                'updated_at' => '2018-01-24 13:54:51',
            ),
            14 => 
            array (
                'id' => 131,
                'article_id' => 25,
                'ip' => '120.230.81.221',
                'country' => NULL,
                'clicks' => 3,
                'created_at' => '2018-01-24 14:10:48',
                'updated_at' => '2018-01-24 15:46:46',
            ),
            15 => 
            array (
                'id' => 132,
                'article_id' => 24,
                'ip' => '120.230.81.221',
                'country' => NULL,
                'clicks' => 1,
                'created_at' => '2018-01-24 14:37:20',
                'updated_at' => '2018-01-24 14:37:20',
            ),
            16 => 
            array (
                'id' => 133,
                'article_id' => 21,
                'ip' => '120.230.81.221',
                'country' => NULL,
                'clicks' => 3,
                'created_at' => '2018-01-24 14:37:25',
                'updated_at' => '2018-01-24 17:03:27',
            ),
            17 => 
            array (
                'id' => 134,
                'article_id' => 29,
                'ip' => '120.230.81.221',
                'country' => NULL,
                'clicks' => 10,
                'created_at' => '2018-01-24 15:32:29',
                'updated_at' => '2018-01-24 15:57:47',
            ),
            18 => 
            array (
                'id' => 135,
                'article_id' => 25,
                'ip' => '112.96.173.122',
                'country' => NULL,
                'clicks' => 1,
                'created_at' => '2018-01-24 16:01:14',
                'updated_at' => '2018-01-24 16:01:14',
            ),
            19 => 
            array (
                'id' => 136,
                'article_id' => 25,
                'ip' => '117.136.79.58',
                'country' => NULL,
                'clicks' => 37,
                'created_at' => '2018-01-24 16:01:42',
                'updated_at' => '2018-01-24 16:01:42',
            ),
            20 => 
            array (
                'id' => 137,
                'article_id' => 21,
                'ip' => '117.136.79.58',
                'country' => NULL,
                'clicks' => 23,
                'created_at' => '2018-01-24 16:02:03',
                'updated_at' => '2018-01-24 16:02:03',
            ),
            21 => 
            array (
                'id' => 138,
                'article_id' => 31,
                'ip' => '112.96.173.122',
                'country' => NULL,
                'clicks' => 23,
                'created_at' => '2018-01-24 16:02:11',
                'updated_at' => '2018-01-24 16:02:11',
            ),
            22 => 
            array (
                'id' => 139,
                'article_id' => 21,
                'ip' => '120.204.17.69',
                'country' => NULL,
                'clicks' => 23,
                'created_at' => '2018-01-24 16:03:03',
                'updated_at' => '2018-01-24 16:03:03',
            ),
            23 => 
            array (
                'id' => 140,
                'article_id' => 31,
                'ip' => '120.204.17.69',
                'country' => NULL,
                'clicks' => 23,
                'created_at' => '2018-01-24 16:03:11',
                'updated_at' => '2018-01-24 16:03:11',
            ),
            24 => 
            array (
                'id' => 141,
                'article_id' => 27,
                'ip' => '112.96.173.122',
                'country' => NULL,
                'clicks' => 23,
                'created_at' => '2018-01-24 16:05:59',
                'updated_at' => '2018-01-24 16:05:59',
            ),
            25 => 
            array (
                'id' => 142,
                'article_id' => 30,
                'ip' => '112.96.173.122',
                'country' => NULL,
                'clicks' => 23,
                'created_at' => '2018-01-24 16:06:15',
                'updated_at' => '2018-01-24 16:06:15',
            ),
            26 => 
            array (
                'id' => 143,
                'article_id' => 21,
                'ip' => '112.96.173.122',
                'country' => NULL,
                'clicks' => 23,
                'created_at' => '2018-01-24 16:06:30',
                'updated_at' => '2018-01-24 16:06:48',
            ),
            27 => 
            array (
                'id' => 144,
                'article_id' => 25,
                'ip' => '116.30.197.142',
                'country' => NULL,
                'clicks' => 37,
                'created_at' => '2018-01-24 16:12:56',
                'updated_at' => '2018-01-24 16:12:57',
            ),
            28 => 
            array (
                'id' => 145,
                'article_id' => 21,
                'ip' => '116.30.197.142',
                'country' => NULL,
                'clicks' => 37,
                'created_at' => '2018-01-24 16:14:10',
                'updated_at' => '2018-01-24 16:14:10',
            ),
            29 => 
            array (
                'id' => 146,
                'article_id' => 26,
                'ip' => '120.230.81.221',
                'country' => NULL,
                'clicks' => 37,
                'created_at' => '2018-01-24 17:03:06',
                'updated_at' => '2018-01-24 17:03:06',
            ),
            30 => 
            array (
                'id' => 147,
                'article_id' => 24,
                'ip' => '112.96.33.21',
                'country' => NULL,
                'clicks' => 37,
                'created_at' => '2018-01-24 17:28:14',
                'updated_at' => '2018-01-24 17:28:14',
            ),
            31 => 
            array (
                'id' => 148,
                'article_id' => 26,
                'ip' => '112.96.33.21',
                'country' => NULL,
                'clicks' => 37,
                'created_at' => '2018-01-24 17:28:27',
                'updated_at' => '2018-01-24 17:28:27',
            ),
            32 => 
            array (
                'id' => 149,
                'article_id' => 21,
                'ip' => '120.230.81.240',
                'country' => NULL,
                'clicks' => 37,
                'created_at' => '2018-01-25 00:19:03',
                'updated_at' => '2018-01-25 00:19:03',
            ),
            33 => 
            array (
                'id' => 150,
                'article_id' => 25,
                'ip' => '163.177.136.243',
                'country' => NULL,
                'clicks' => 38,
                'created_at' => '2018-01-25 09:27:13',
                'updated_at' => '2018-01-25 09:35:18',
            ),
            34 => 
            array (
                'id' => 151,
                'article_id' => 31,
                'ip' => '120.230.84.51',
                'country' => NULL,
                'clicks' => 1,
                'created_at' => '2018-01-25 12:57:06',
                'updated_at' => '2018-01-25 12:57:06',
            ),
            35 => 
            array (
                'id' => 152,
                'article_id' => 31,
                'ip' => '163.177.136.90',
                'country' => NULL,
                'clicks' => 1,
                'created_at' => '2018-01-26 08:29:57',
                'updated_at' => '2018-01-26 08:29:57',
            ),
            36 => 
            array (
                'id' => 153,
                'article_id' => 27,
                'ip' => '163.177.136.90',
                'country' => NULL,
                'clicks' => 1,
                'created_at' => '2018-01-26 08:30:01',
                'updated_at' => '2018-01-26 08:30:01',
            ),
            37 => 
            array (
                'id' => 154,
                'article_id' => 24,
                'ip' => '163.177.136.90',
                'country' => NULL,
                'clicks' => 1,
                'created_at' => '2018-01-26 08:30:11',
                'updated_at' => '2018-01-26 08:30:11',
            ),
            38 => 
            array (
                'id' => 155,
                'article_id' => 23,
                'ip' => '163.177.136.90',
                'country' => NULL,
                'clicks' => 1,
                'created_at' => '2018-01-26 08:30:33',
                'updated_at' => '2018-01-26 08:30:33',
            ),
            39 => 
            array (
                'id' => 156,
                'article_id' => 32,
                'ip' => '163.177.136.222',
                'country' => NULL,
                'clicks' => 1,
                'created_at' => '2018-01-27 08:47:44',
                'updated_at' => '2018-01-27 08:47:44',
            ),
            40 => 
            array (
                'id' => 157,
                'article_id' => 29,
                'ip' => '120.230.81.107',
                'country' => NULL,
                'clicks' => 2,
                'created_at' => '2018-01-28 09:38:21',
                'updated_at' => '2018-01-28 09:40:05',
            ),
        ));
        
        
    }
}