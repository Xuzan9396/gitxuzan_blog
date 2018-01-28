<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 11,
                'parent_id' => 0,
                'name' => '世界最好语言PHP',
                'path' => 'http://www.phpchina.com/',
                'description' => '钻研php',
                'image_url' => NULL,
                'created_at' => '2018-01-22 16:24:26',
                'updated_at' => '2018-01-22 16:25:17',
            ),
            1 => 
            array (
                'id' => 12,
                'parent_id' => 0,
                'name' => 'JavaScript',
                'path' => 'http://www.w3school.com.cn/js/',
                'description' => 'javascript',
                'image_url' => NULL,
                'created_at' => '2018-01-23 04:43:27',
                'updated_at' => '2018-01-23 04:59:01',
            ),
            2 => 
            array (
                'id' => 13,
                'parent_id' => 0,
                'name' => 'msyql 数据库',
                'path' => 'https://www.mysql.com/',
                'description' => 'msyql 数据库',
                'image_url' => NULL,
                'created_at' => '2018-01-23 04:58:44',
                'updated_at' => '2018-01-23 04:58:44',
            ),
            3 => 
            array (
                'id' => 14,
                'parent_id' => 0,
                'name' => '大法Python',
                'path' => 'https://www.liaoxuefeng.com/wiki/0014316089557264a6b348958f449949df42a6d3a2e542c000/001431608990315a01b575e2ab041168ff0df194698afac000',
                'description' => 'python 语言',
                'image_url' => NULL,
                'created_at' => '2018-01-23 04:59:45',
                'updated_at' => '2018-01-23 04:59:45',
            ),
            4 => 
            array (
                'id' => 15,
                'parent_id' => 0,
                'name' => 'IDE',
                'path' => 'https://www.jetbrains.com/zh/phpstorm/specials/phpstorm/phpstorm.html?utm_source=baidu&utm_medium=cpc&utm_campaign=cn-bai-br-phpstorm-ex-pc&utm_content=phpstorm-prue&utm_term=phpstorm',
                'description' => '编程工具',
                'image_url' => NULL,
                'created_at' => '2018-01-23 05:01:12',
                'updated_at' => '2018-01-23 05:01:12',
            ),
            5 => 
            array (
                'id' => 16,
                'parent_id' => 0,
                'name' => 'Laravel',
                'path' => 'https://laravel-china.org/topics',
                'description' => 'laravel 社区',
                'image_url' => NULL,
                'created_at' => '2018-01-23 05:01:47',
                'updated_at' => '2018-01-23 05:01:47',
            ),
            6 => 
            array (
                'id' => 17,
                'parent_id' => 0,
                'name' => '其他',
                'path' => 'blog.360.shop',
                'description' => 'other',
                'image_url' => NULL,
                'created_at' => '2018-01-23 05:59:11',
                'updated_at' => '2018-01-23 05:59:11',
            ),
            7 => 
            array (
                'id' => 18,
                'parent_id' => 0,
                'name' => 'ubantu',
                'path' => 'https://www.ubuntu.com/download',
                'description' => 'ubantu 系统',
                'image_url' => NULL,
                'created_at' => '2018-01-24 02:20:02',
                'updated_at' => '2018-01-24 02:20:02',
            ),
            8 => 
            array (
                'id' => 19,
                'parent_id' => 0,
                'name' => 'Browser',
                'path' => 'http://www.google.com/',
                'description' => '浏览器',
                'image_url' => NULL,
                'created_at' => '2018-01-24 02:26:18',
                'updated_at' => '2018-01-24 02:26:18',
            ),
            9 => 
            array (
                'id' => 20,
                'parent_id' => 0,
                'name' => 'Linux',
                'path' => 'https://baike.baidu.com/item/linux/27050?fr=aladdin',
                'description' => 'linux 系统',
                'image_url' => NULL,
                'created_at' => '2018-01-27 08:43:22',
                'updated_at' => '2018-01-27 08:43:22',
            ),
        ));
        
        
    }
}