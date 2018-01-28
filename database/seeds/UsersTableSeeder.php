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
                'id' => 12,
                'name' => 'gitxuan',
                'nickname' => 'gitxuzan',
                'avatar' => 'https://xz.cc360.shop/storage/avatar/2018/01/22/ibiL5Q6KaSgKRbTtHcZV4kvobLTePggaeeRmijWq.jpg',
                'email' => 'gitxuzan@126.com',
                'confirm_code' => NULL,
                'status' => 1,
                'is_admin' => 1,
                'password' => '$2y$10$rdUjKmtVJYWH4i63R4aQq.x6NmFlqAK1VTV1TkriXM/RHpm5Am.Iu',
                'github_id' => NULL,
                'github_name' => NULL,
                'github_url' => NULL,
                'weibo_name' => '特别的赞',
                'weibo_link' => NULL,
                'website' => NULL,
                'description' => '贡献一份优雅的代码！',
                'email_notify_enabled' => 'yes',
                'remember_token' => 'gMDsiQhLOR9y7BRpTj6Vf8TEPOHeTgpRM2ndSEnLpKqLMEz8b0w05I2ffTmv',
                'created_at' => '2018-01-21 13:55:29',
                'updated_at' => '2018-01-22 17:48:05',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 13,
                'name' => 'laitingyou',
                'nickname' => NULL,
                'avatar' => 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAP8AAAD/CAIAAACxapedAAAABnRSTlMAAAAAAABupgeRAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAC+klEQVR4nO3WUY2EUBBFwWUzApCAFKQjBQlIWAOwCV89yalScPM46bAc5/rDS/t2TU+44VO+9Ts9AMaony7106V+utRPl/rpUj9d6qdL/XSpny7106V+utRPl/rpUj9d6qdL/XSpny7106V+utRPl/rpUj9d6qdL/XSpny7106V+utRPl/rpUj9d6qdL/XSpny7106V+utRPl/rpUj9d6qdL/XSpny7106V+utRPl/rpUj9d6qdL/XSpn67lONfpDTDD7adL/XSpny7106V+utRPl/rpUj9d6qdL/XSpny7106V+utRPl/rpUj9d6qdL/XSpny7106V+utRPl/rpUj9d6qdL/XSpny7106V+utRPl/rpUj9d6qdL/XSpny7106V+utRPl/rpUj9d6qdL/XSpny7106V+utRPl/rpUj9d6qdL/XSpny7106V+utRPl/rpUj9d6qdL/XSpny7106V+utRPl/rpUj9d6qdL/XSpny7106V+utRPl/rpUj9d6qdL/XSpny7106V+utRPl/rpUj9d6qdL/XSpny7106V+utRPl/rpUj9d6qdL/XSpny7106V+utRPl/rpUj9d6qdL/XSpny7106V+utRP1zI94NFxrtMTHu3bNT3hhhd7y+2nS/10qZ8u9dOlfrrUT5f66VI/XeqnS/10qZ8u9dOlfrrUT5f66VI/XeqnS/10qZ8u9dOlfrrUT5f66VI/XeqnS/10qZ8u9dOlfrrUT5f66VI/XeqnS/10qZ8u9dOlfrrUT5f66VI/XeqnS/10qZ8u9dOlfrrUT5f66VI/XeqnaznOdXoDzPhMD/jPvl3TE258873wYq/486FL/XSpny7106V+utRPl/rpUj9d6qdL/XSpny7106V+utRPl/rpUj9d6qdL/XSpny7106V+utRPl/rpUj9d6qdL/XSpny7106V+utRPl/rpUj9d6qdL/XSpny7106V+utRPl/rpUj9d6qdL/XSpny7106V+utRPl/rpUj9d6qfrD0P2Fg1h6T+vAAAAAElFTkSuQmCC',
                'email' => '1003774479@qq.com',
                'confirm_code' => NULL,
                'status' => 1,
                'is_admin' => 0,
                'password' => '$2y$10$dQOk1qzh7YXnBu/sCdfuL.vMtBFyIDeYRcIsxT02LYbXbfYbBcEdm',
                'github_id' => NULL,
                'github_name' => NULL,
                'github_url' => NULL,
                'weibo_name' => NULL,
                'weibo_link' => NULL,
                'website' => NULL,
                'description' => NULL,
                'email_notify_enabled' => 'yes',
                'remember_token' => NULL,
                'created_at' => '2018-01-23 03:57:08',
                'updated_at' => '2018-01-23 03:57:08',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 14,
                'name' => 'zhouwujie',
                'nickname' => '武杰',
                'avatar' => 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAP8AAAD/CAIAAACxapedAAAABnRSTlMAAAAAAABupgeRAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAC70lEQVR4nO3U0WnEAAwFwfORAlyySnYJ14D9EQgox85U8BCLjtd/NedsT+DPzDXbE268twfAGvXTpX661E+X+ulSP13qp0v9dKmfLvXTpX661E+X+ulSP13qp0v9dKmfLvXTpX661E+X+ulSP13qp0v9dKmfLvXTpX661E+X+ulSP13qp0v9dKmfLvXTpX661E+X+ulSP13qp0v9dKmfLvXTpX661E+X+ulSP13qp0v9dKmfLvXTpX66frYHfKW5ZnvCjTlne8KX8fvpUj9d6qdL/XSpny7106V+utRPl/rpUj9d6qdL/XSpny7106V+utRPl/rpUj9d6qdL/XSpny7106V+utRPl/rpUj9d6qdL/XSpny7106V+utRPl/rpUj9d6qdL/XSpny7106V+utRPl/rpUj9d6qdL/XSpny7106V+utRPl/rpOuac7Q2ww++nS/10qZ8u9dOlfrrUT5f66VI/XeqnS/10qZ8u9dOlfrrUT5f66VI/XeqnS/10qZ8u9dOlfrrUT5f66VI/XeqnS/10qZ8u9dOlfrrUT5f66VI/XeqnS/10qZ8u9dOlfrrUT5f66VI/XeqnS/10qZ8u9dOlfrrUT5f66VI/XeqnS/10qZ+uY3vAozlne8KjuWZ7wg0X+y2/ny7106V+utRPl/rpUj9d6qdL/XSpny7106V+utRPl/rpUj9d6qdL/XSpny7106V+utRPl/rpUj9d6qdL/XSpny7106V+utRPl/rpUj9d6qdL/XSpny7106V+utRPl/rpUj9d6qdL/XSpny7106V+utRPl/rpUj9d6qdL/XSpny7106V+utRPl/rpUj9d6qdL/XSpny7106V+utRPl/rpUj9d6qdL/XSpny7106V+utRPl/rpUj9d6qdL/XSpny7106V+utRPl/rpUj9d6qdL/XSpny7106V+utRPl/rpUj9d6qdL/XSpny7106V+utRPl/rpUj9d6qdL/XSpny7106V+utRP1wcz+g8OPJkNXQAAAABJRU5ErkJggg==',
                'email' => '2878354193@qq.com',
                'confirm_code' => NULL,
                'status' => 1,
                'is_admin' => 0,
                'password' => '$2y$10$ph5BpVwnuOXsPQSKwc5KjulysJFSwxRA//3t8LZiQcOfGFp1/6NXC',
                'github_id' => NULL,
                'github_name' => NULL,
                'github_url' => NULL,
                'weibo_name' => NULL,
                'weibo_link' => NULL,
                'website' => NULL,
                'description' => NULL,
                'email_notify_enabled' => 'yes',
                'remember_token' => NULL,
                'created_at' => '2018-01-23 04:37:21',
                'updated_at' => '2018-01-23 04:38:34',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 15,
                'name' => 'Xuzan9396',
                'nickname' => NULL,
                'avatar' => 'https://avatars2.githubusercontent.com/u/24741439?v=4',
                'email' => 'm13265000805@163.com',
                'confirm_code' => NULL,
                'status' => 1,
                'is_admin' => 1,
                'password' => '$2y$10$PkakBgI0.veHZdeCUKDCZuAYCKSESQ5ZaXskvI886CORSncj9ZCRm',
                'github_id' => '24741439',
                'github_name' => 'Xuzan9396',
                'github_url' => 'https://api.github.com/users/Xuzan9396',
                'weibo_name' => NULL,
                'weibo_link' => NULL,
                'website' => NULL,
                'description' => NULL,
                'email_notify_enabled' => 'yes',
                'remember_token' => 'UZXaCZ4hq0OVSTLhjMPeN1RaZ6MQDIyCBTqDZlDd6Oba6SyPhGisxDf8nLQ2',
                'created_at' => '2018-01-23 17:10:26',
                'updated_at' => '2018-01-23 17:10:26',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}