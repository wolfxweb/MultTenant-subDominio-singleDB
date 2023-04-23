<?php

namespace  App\Traits;

use App\Tenant\ManagerTenant;

Trait TenantTrait{

    public function getTenantId(){
        $tenant  = new  ManagerTenant();
        return $tenant->tenantId();
    }

}


