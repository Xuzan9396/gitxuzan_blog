<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersTableSeeder::class);
         $this->call(CategoriesTableSeeder::class);
         $this->call(ArticlesTableSeeder::class);
         $this->call(DiscussionsTableSeeder::class);
         $this->call(CommentsTableSeeder::class);
         $this->call(TagsTableSeeder::class);
         $this->call(LinksTableSeeder::class);

         $this->call(VisitorsTableSeeder::class);
        $this->call(FailedJobsTableSeeder::class);
        $this->call(FollowersTableSeeder::class);
        $this->call(NotificationsTableSeeder::class);
        $this->call(OauthAccessTokensTableSeeder::class);
        $this->call(OauthAuthCodesTableSeeder::class);
        $this->call(OauthClientsTableSeeder::class);
        $this->call(OauthPersonalAccessClientsTableSeeder::class);
        $this->call(OauthRefreshTokensTableSeeder::class);
        $this->call(PasswordResetsTableSeeder::class);
        $this->call(TaggablesTableSeeder::class);
        $this->call(VotesTableSeeder::class);
    }
}
