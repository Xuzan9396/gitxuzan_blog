<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tags')->delete();
        
        \DB::table('tags')->insert(array (
            0 => 
            array (
                'id' => 1,
                'tag' => 'sunt',
                'title' => 'Aut quae aut totam quisquam hic minima ea vero.',
                'meta_description' => 'Doloremque repellat similique veritatis facere tempore.',
                'created_at' => '2018-01-21 13:40:47',
                'updated_at' => '2018-01-22 15:59:55',
                'deleted_at' => '2018-01-22 15:59:55',
            ),
            1 => 
            array (
                'id' => 2,
                'tag' => 'sequi',
                'title' => 'Optio autem pariatur ipsa veniam voluptas qui id.',
                'meta_description' => 'Atque aut exercitationem consequatur explicabo veritatis unde ullam.',
                'created_at' => '2018-01-21 13:40:47',
                'updated_at' => '2018-01-22 15:59:56',
                'deleted_at' => '2018-01-22 15:59:56',
            ),
            2 => 
            array (
                'id' => 3,
                'tag' => 'repellendus',
                'title' => 'Debitis excepturi dolorem repellendus ut consequuntur.',
                'meta_description' => 'Quis sequi perspiciatis quas praesentium assumenda.',
                'created_at' => '2018-01-21 13:40:47',
                'updated_at' => '2018-01-22 15:59:58',
                'deleted_at' => '2018-01-22 15:59:58',
            ),
            3 => 
            array (
                'id' => 4,
                'tag' => 'odio',
                'title' => 'Suscipit eius consequatur eaque ad sunt.',
                'meta_description' => 'Rerum inventore harum illo quia aliquid.',
                'created_at' => '2018-01-21 13:40:47',
                'updated_at' => '2018-01-22 16:00:03',
                'deleted_at' => '2018-01-22 16:00:03',
            ),
            4 => 
            array (
                'id' => 5,
                'tag' => 'excepturi',
                'title' => 'Quia sit vel porro.',
                'meta_description' => 'Dolor dolor sunt vel delectus voluptatem necessitatibus.',
                'created_at' => '2018-01-21 13:40:47',
                'updated_at' => '2018-01-23 03:10:55',
                'deleted_at' => '2018-01-23 03:10:55',
            ),
            5 => 
            array (
                'id' => 6,
                'tag' => 'php',
                'title' => 'php技术分享',
                'meta_description' => 'php 标签',
                'created_at' => '2018-01-23 03:11:36',
                'updated_at' => '2018-01-23 03:11:36',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'tag' => 'laravel',
                'title' => 'laravel',
                'meta_description' => 'laravel',
                'created_at' => '2018-01-23 04:35:39',
                'updated_at' => '2018-01-23 04:35:39',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'tag' => 'liunx',
                'title' => 'centos',
                'meta_description' => 'liunx 服务器',
                'created_at' => '2018-01-23 04:36:02',
                'updated_at' => '2018-01-24 15:30:44',
                'deleted_at' => '2018-01-24 15:30:44',
            ),
            8 => 
            array (
                'id' => 9,
                'tag' => 'vue',
                'title' => 'vue',
                'meta_description' => 'vue 前端框架',
                'created_at' => '2018-01-23 04:36:13',
                'updated_at' => '2018-01-23 04:57:22',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'tag' => 'js',
                'title' => 'js',
                'meta_description' => 'javascript 语言',
                'created_at' => '2018-01-23 04:41:52',
                'updated_at' => '2018-01-23 04:56:46',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'tag' => 'markdown',
                'title' => 'markdown',
                'meta_description' => 'markdown',
                'created_at' => '2018-01-23 04:53:20',
                'updated_at' => '2018-01-23 04:53:20',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'tag' => 'mysql',
                'title' => 'mysql',
                'meta_description' => 'mysql 数据库',
                'created_at' => '2018-01-23 04:53:40',
                'updated_at' => '2018-01-23 04:56:21',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'tag' => 'react',
                'title' => 'react',
                'meta_description' => 'react',
                'created_at' => '2018-01-23 04:54:43',
                'updated_at' => '2018-01-23 04:54:43',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'tag' => 'python',
                'title' => 'python',
                'meta_description' => 'python',
                'created_at' => '2018-01-23 04:55:00',
                'updated_at' => '2018-01-23 04:55:00',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'tag' => 'ubantu',
                'title' => 'ubantu',
                'meta_description' => 'ubantu 系统',
                'created_at' => '2018-01-23 04:55:16',
                'updated_at' => '2018-01-23 04:56:12',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'tag' => 'element ui',
                'title' => 'element ui',
                'meta_description' => 'Element，一套为开发者、设计师和产品经理准备的基于 Vue 2.0 的桌面端组件库',
                'created_at' => '2018-01-23 04:56:05',
                'updated_at' => '2018-01-23 04:56:05',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'tag' => 'phpstorm',
                'title' => 'phpstorm ide',
                'meta_description' => 'phpstorm 编程工具',
                'created_at' => '2018-01-23 04:57:47',
                'updated_at' => '2018-01-23 04:57:47',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'tag' => 'chrome',
                'title' => 'chrome',
                'meta_description' => '浏览器',
                'created_at' => '2018-01-24 02:25:39',
                'updated_at' => '2018-01-24 02:25:39',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'tag' => 'linux',
                'title' => 'linux系统',
                'meta_description' => 'linux系统',
                'created_at' => '2018-01-24 15:31:24',
                'updated_at' => '2018-01-24 15:31:24',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'tag' => 'IDE',
                'title' => 'IDE',
                'meta_description' => 'IDE编辑器',
                'created_at' => '2018-01-24 15:32:09',
                'updated_at' => '2018-01-24 15:32:09',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}