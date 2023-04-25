<?php

namespace App\Http\Livewire\Empresa;

use Livewire\Component;

class Agenda extends Component
{
    public $message;
    
    public function render()
    {
        return view('agenda.home');
    }
}
