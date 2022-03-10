<?php

namespace  App\Tenant\Traits;

use App\Models\Tenant;
use App\Models\User;
use App\Tenant\ManagerTenant;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

trait  CreateDataBase
{

    public $empresa;
    public $userData;
    public  $empresaDataFrom;

    public function createTenant($empresa, $userData)
    {

        $this->empresaDataFrom = $empresa;
        $this->userData = $userData;
        $this->empresa =  Tenant::create($empresa);
        if (!$this->empresa) {
            throw new \ErrorException('Não foi possivel cadastrar a empresa');
        }
        if ($this->empresa->tipo) {
            $this->newBD($this->empresa);
        } else {

          //  dd($this->empresa->id);
          $this->addUserMaster($this->empresa,$this->empresa );
        }
    }



    public function newBD($empresa)
    {

        $bancoDados =   DB::statement("CREATE DATABASE {$empresa->db_database} CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci");
        if (!$bancoDados) {
            throw new \ErrorException('Não foi possivel criar o banco de dados');
        }
        $this->excutaMigrateTenant($empresa);
    }

    public   function excutaMigrateTenant($empresa)
    {

        Artisan::call('tenants:migrations', ['id' => $empresa->id]);

        //conexão com  o novo banco de dados
        $tenantConexaoDb = app(ManagerTenant::class);
        $tenantConexaoDb->setConexao($empresa);

        //criar tenant padrão na base de dados como a estrura e a mesma do banco de dados compartinhado a tabela tenant e criada
        // para manter acompatibilidade do codido o gerenciamento dos tenants e pelo banco principal.
        $this->addTenant($this->empresaDataFrom);
    }

    public function addTenant($empresa)
    {
        $tenant = Tenant::create($empresa);
        if (!$tenant) {
            throw new \ErrorException('Não foi possivel tenant no banco de dados');
        }
        $this->addUserMaster($tenant, $empresa);
    }

    public  function addUserMaster($tenant,$empresa)
    {

        $new =  User::create([
            'name' => $this->userData['name'],
            'email' => $this->userData['email'],
            'password' =>  Hash::make($this->userData['password']),
            'tenant_id' => $tenant->id,
        ]);
        if (!$new) {
            throw new \ErrorException('Não foi possivel criar usuário master no banco de dados');
        }
       return $empresa;
    }
}
