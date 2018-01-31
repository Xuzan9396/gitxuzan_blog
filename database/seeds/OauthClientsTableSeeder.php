<?php

use Illuminate\Database\Seeder;

class OauthClientsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('oauth_clients')->delete();
        
        \DB::table('oauth_clients')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => NULL,
                'name' => 'gitxuzan Personal Access Client',
                'secret' => 'nOovJWksHoHS6GtuBAd5Rr24jd7uKkX3gFLb81Vt',
                'redirect' => 'http://localhost',
                'personal_access_client' => 1,
                'password_client' => 0,
                'revoked' => 0,
                'created_at' => '2018-01-21 13:40:52',
                'updated_at' => '2018-01-21 13:40:52',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => NULL,
                'name' => 'gitxuzan Password Grant Client',
                'secret' => '8y1UGm4kZiTpTMRHa2WAMuzTlv3lJWXZGHKGq33c',
                'redirect' => 'http://localhost',
                'personal_access_client' => 0,
                'password_client' => 1,
                'revoked' => 0,
                'created_at' => '2018-01-21 13:40:52',
                'updated_at' => '2018-01-21 13:40:52',
            ),
        ));
        
        
    }
}