<?php


namespace App\Tenant;

use App\Models\Tenant;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class ManagerTenant{

    public function subDominio(){
        $urlTenant = explode('.', request()->getHost() );
        return $urlTenant[0];
    }
    public function tenant(){

        $subdominio = $this->subDominio();
        $tenant = Tenant::where('subdominio',$subdominio)->first();
        return  $tenant;
    }
    public function tenantId(){

        $tenant = $this->tenant();
        return  $tenant->id;
    }
    public function isDominioPrinicipal(){
        $subdominio = $this->subDominio();
        $auxSubDominio = config('tenant.subdominio_master');
        return  $subdominio ==  $auxSubDominio;
    }

    public function setConexao(Tenant $tenant){
     //   dd( $tenant);
        DB::purge('tenant');
            config()->set('database.connections.tenant.host',$tenant->db_hostname);
            config()->set('database.connections.tenant.database',$tenant->db_database);
            config()->set('database.connections.tenant.username',$tenant->db_username);
            config()->set('database.connections.tenant.password',$tenant->db_password);
        DB::reconnect('tenant');
       // dd($connq);
       Schema::connection('tenant')->getConnection()->reconnect();

    }
}
