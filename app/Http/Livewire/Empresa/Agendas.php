<?php

namespace App\Http\Livewire\Empresa;

use App\Models\User;
use App\Traits\TenantTrait;
use Livewire\Component;


class Agendas extends Component{
   
    use TenantTrait; 
   
    public $message;
    public $usuario_selecionado;
    public $diaSemana ='7';
    public $horaInicial = '';
    public $horaFinal ='';

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
