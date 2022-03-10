<?php

namespace App\Http\Livewire\Empresa;

use App\Models\Tenant;
use Livewire\Component;

class TabelaEmpresas extends Component
{


    public function render()
    {
        $tenants = Tenant::all();
      //  dd( $tenants);
        return view('livewire.empresa.tabela-empresas',compact('tenants'));
    }
}
