<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class cmsweb extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cmsweb:install
                            {--module= : module to install }
                            {--r|reset  : restart database}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install CMSWEB';

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
        if($this->option('reset')){
            $this->call('migrate:refresh');
            $this->call('db:seed');
            $this->info('La base de datos del CMSWEB ha sido reiniciada.');
            
            // Instalar módulo
            if($this->option('module')){
                $this->call('db:seed', ['--class' => '\\Modules\\'.$this->option('module').'\\Database\\Seeders\\'.$this->option('module').'DatabaseSeeder']);
                $this->info('El módulo '.$this->option('module').' fue instalado correctamente.');
            }
        }else{
            $this->call('key:generate');
            $this->call('voyager:install');

            // Instalar módulo
            if($this->option('module')){
                $this->call('db:seed', ['--class' => '\\Modules\\'.$this->option('module').'\\Database\\Seeders\\'.$this->option('module').'DatabaseSeeder']);
                $this->info('El módulo '.$this->option('module').' fue instalado correctamente.');
            }
    
            $this->info('
                █▀▀ █▀▄▀█ █▀ █░█░█ █▀▀ █▄▄   █ █▄░█ █▀ ▀█▀ ▄▀█ █░░ █░░ █▀▀ █▀▄ █ █ █
                █▄▄ █░▀░█ ▄█ ▀▄▀▄▀ ██▄ █▄█   █ █░▀█ ▄█ ░█░ █▀█ █▄▄ █▄▄ ██▄ █▄▀ ▄ ▄ ▄
            ');
        }
    }
}
