<?php



namespace App\Tenant\Scopes;

use App\Tenant\ManagerTenant;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class TenantScope implements Scope {

    public function apply(Builder $builder, Model $model){

        if(app()->runningInConsole()){
            return;
        }
        $tenant = app(ManagerTenant::class)->tenantId();

      //  dd( $tenant);
        $builder->where('tenant_id',$tenant);



    }

}
