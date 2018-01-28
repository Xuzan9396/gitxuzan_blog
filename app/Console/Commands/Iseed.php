<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Iseed extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'base:iseed';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->call('iseed',[
            'tables' => '
            articles,
            categories,
            comments,
            discussions,
            failed_jobs,
            followers,
            links,
            notifications,
            oauth_access_tokens,
            oauth_auth_codes,
            oauth_clients,
            oauth_personal_access_clients,
            oauth_refresh_tokens,
            password_resets,
            taggables,
            tags,
            users,
            visitors,
            votes
            ',
            '--force' => true,
        ]);
        echo "update iseed";
    }
}
