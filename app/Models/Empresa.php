<?php

namespace App\Models;

use App\Tenant\Observers\TenantObserver;
use App\Tenant\Scopes\TenantScope;
use App\Tenant\Traits\TenantTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;
    use TenantTrait;

    protected $fillable=['nome','status','user_id ','tenant_id'];




    public function  getEmpresa(){
        return $this->belongsTo(User::class);
    }
    public function  getTenant(){
        return $this->belongsTo(Tenant::class);
    }




}
