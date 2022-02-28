<?php

namespace App\Http\Livewire\Empresa;

use Livewire\Component;

class CadastroEmpresa extends Component
{

    public $subdominio;
    public $nome;
    public $status =true;
    public $dados_cadastrais;
    public $sistema_info;
    public $db_database;
    public $db_hostname;
    public $db_username;
    public $db_password;
    public $tipo = false;
    public $rasao_social;
    public $cnpj;
    public $inscricao_estadual;
    public $inscricao_municipal;
    public $telefone_fixo;
    public $telefone_celular;
    public $endereco;
    public $bairro;
    public $cidade;
    public $estado;
    public $cep;
    public $name;
    public $email;
    public $password;
    public $password_confirmation;




    public function updated($field){

        //dd($field);
       switch ($field) {
           case 'tipo':
            //  dd($this->tipo);

               break;

           default:
               # code...
               break;
       }
    }

    public function render()
    {
        return view('livewire.empresa.cadastro-empresa');
    }

    public function save(){}

}
