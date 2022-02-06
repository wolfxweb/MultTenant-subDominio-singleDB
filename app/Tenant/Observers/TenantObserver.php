<?php




namespace App\Tenant\Observers;

use Illuminate\Database\Eloquent\Model;

class TenantObserver{

    public function creating(Model $model){

        if(app()->runningInConsole()){
            return;
        }
        $tenant = app(ManagerTenant::class)->tenantId();
        $model->setAttribute('tenant_id',$tenant);

    }

}
