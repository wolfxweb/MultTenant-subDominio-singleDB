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

    public function list(){
        
        return view('empresa.home');
    }
}
