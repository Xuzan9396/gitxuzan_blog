<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class IdeHelper extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'base:helper';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '编辑缓存功能';

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
        //
        $this->call('ide-helper:models',['--dir' => ['app'],'--nowrite' => true]);
        $this->call('ide-helper:models');
        $this->call('ide-helper:meta');
        $this->call('ide-helper:generate');
        $this->call('config:clear');
        echo "update success\n";
    }
}
