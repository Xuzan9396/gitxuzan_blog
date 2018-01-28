<?php

use Illuminate\Database\Seeder;

class LinksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('links')->delete();
        
        \DB::table('links')->insert(array (
            0 => 
            array (
                'id' => 11,
                'name' => 'segmentfault',
                'link' => 'https://segmentfault.com',
                'image' => 'https://xz.cc360.shop/storage/links/2018/01/22/TVdkImge3HaH8n4zzh9Weo3E5mKPbfzRdIdOqv11.jpg',
                'status' => 1,
                'created_at' => '2018-01-22 17:52:09',
                'updated_at' => '2018-01-24 02:26:40',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 12,
                'name' => 'laravel-china',
                'link' => 'https://laravel-china.org/topics',
                'image' => 'https://xz.cc360.shop/storage/links/2018/01/23/ePYXAiqekf8iwoD5BuZcgXi7E4tzvg0hGt0cHjhA.jpg',
                'status' => 1,
                'created_at' => '2018-01-23 03:22:21',
                'updated_at' => '2018-01-23 03:22:21',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 13,
                'name' => 'about me github',
                'link' => 'https://github.com/Xuzan9396',
                'image' => 'https://xz.cc360.shop/storage/links/2018/01/23/YpzTILMsQ34U3uKYd3GsjX034pNQBAnyFHGPFKuz.jpg',
                'status' => 1,
                'created_at' => '2018-01-23 03:24:02',
                'updated_at' => '2018-01-23 03:24:02',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 14,
                'name' => 'stackovflow',
                'link' => 'https://stackoverflow.com/',
                'image' => 'https://xz.cc360.shop/storage/links/2018/01/24/kCv5qI8pDoxzP9D6HtnyOdfdjA0zCgoIGObVTG1x.png',
                'status' => 1,
                'created_at' => '2018-01-24 02:29:24',
                'updated_at' => '2018-01-24 02:29:24',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 15,
                'name' => 'blog 文档',
                'link' => 'https://manual.pigjian.com/zh-cn/start.html',
                'image' => 'https://xz.cc360.shop/storage/links/2018/01/24/x3MYtUR9xsSvxDbrfS6bZtrbHDDs0ABYuvQgaV39.jpg',
                'status' => 1,
                'created_at' => '2018-01-24 02:30:58',
                'updated_at' => '2018-01-24 02:30:58',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 16,
                'name' => 'python教学',
                'link' => 'https://www.liaoxuefeng.com/wiki/0014316089557264a6b348958f449949df42a6d3a2e542c000/001431608990315a01b575e2ab041168ff0df194698afac000',
                'image' => 'https://xz.cc360.shop/storage/links/2018/01/24/eckPDPQ06H0NUAXMqhUekTu1Epn2RfZdMR8EDlZ6.jpg',
                'status' => 1,
                'created_at' => '2018-01-24 02:31:46',
                'updated_at' => '2018-01-24 02:31:46',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}