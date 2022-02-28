<?php

namespace App\Console\Commands\Tenant;

use App\Models\Tenant;
use App\Tenant\ManagerTenant;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class TenantMigrations extends Command
{
    private $tenant;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tenants:migrations {id?} {--refresh}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run migrations tenants';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(ManagerTenant $tenant)
    {
        parent::__construct();
        $this->tenant = $tenant;
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
       // dd($this->argument('id'));

        if($this->argument('id')){
            $migrateTenant = Tenant::find($this->argument('id'));

            if( $migrateTenant){
                $this->excMigrate($migrateTenant);
            }

        }
        $tenants = Tenant::all();
        foreach($tenants as $tenant){
            $this->excMigrate($tenant);
            $this->info(" empresa {$tenant->nome}" );
        }

    }

    public function excMigrate(Tenant $tenant){
        $comando = $this->option('refresh')?'migrate:refresh': 'migrate';
        if(!$tenant->tipo){
            $this->info(" empresa {$tenant->tipo}" );
            $this->tenant->setConexao($tenant);
            Artisan::call(  $comando ,[
                    '--force'=>true,
                    '--path'=>'/database/migrations/tenant',

            ]);
        }
    }


}
