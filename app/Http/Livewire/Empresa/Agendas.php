<?php

namespace App\Http\Livewire\Empresa;

use App\Models\User;
use App\Traits\TenantTrait;
use Livewire\Component;


class Agendas extends Component
{
   
    public $usuario;
    public $diaSemana;
    public $horaInicial;
    public $horaFinal ="opa";

    use TenantTrait;
    public function render()
    {
        $tenant = $this->getTenantId();
        $usuarios = User::where('tenant_id',$tenant)->get();
      //  dd($usuarios);
        return view('livewire.empresa.agendas',[
            'usuarios'=>$usuarios
        ]);
    }
    
    public function create(){
        dd("dasdas");
    }
}
