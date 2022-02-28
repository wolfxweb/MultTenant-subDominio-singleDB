<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use App\Models\Tenant;
use App\Models\User;
use App\Tenant\BD\DatabaseTenantManager;
use App\Tenant\ManagerTenant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;

class Empresa extends Controller
{
    private $tenant;
    public function __construct(Tenant $tenant)
    {
        $this->tenant = $tenant;
    }
    public function store(Request $request)
    {

        $newEmpresa = $this->tenant->create([
            'subdominio' => 'cliente2',
            'nome' => 'cliente2',
            'db_database' => 'wolfx_cliente2',
            'db_hostname' => '127.0.0.1',
            'db_username' => 'root',
            'tipo' => false,
        ]);
        if ($newEmpresa) {
            //Verifica o tipo da serviço banco de dados separado tipo = flase e bando de dados compartilhado tipo = true
            if (!$newEmpresa->tipo) {
                // cria o banco de dados reforar para colocar login e senha na criação
                $newBD =   DB::statement("
                        CREATE DATABASE {$newEmpresa->db_database} CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
                      ");

                if ($newBD) {
                    //executar as migrate
                    Artisan::call('tenants:migrations', ['id' => $newEmpresa->id]);
                    //conexão com  o novo banco de dados
                    $tenantConexaoDb = app(ManagerTenant::class);
                    $tenantConexaoDb->setConexao($newEmpresa);

                    //criar tenant padrão na base de dados como a estrura e a mesma do banco de dados compartinhado a tabela tenant e criada
                    // para manter acompatibilidade do codido o gerenciamento dos tenants e pelo banco principal.
                    $newTenant =   Tenant::create([
                        'subdominio' =>  $newEmpresa->subdominio,
                        'nome' => $newEmpresa->nome,

                    ]);
                    /** Criação do usuairo master */
                    User::create([
                        'name' => 'eduardo',
                        'email' => 'eduardo@gmail.com',
                        'password' => '12345678',
                        'tenant_id' => $newTenant->id,
                    ]);
                }
            }else{
                //Cadastro no banco de dados compartinhado
                  /** Criação do usuairo master */
                  User::create([
                    'name' => 'cliente1',
                    'email' => 'cliente1@gmail.com',
                    'password' => '12345678',
                    'tenant_id' => $newEmpresa->id,
                ]);
            }
        }
    }
}
