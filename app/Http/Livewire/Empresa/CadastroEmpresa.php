<?php

namespace App\Http\Livewire\Empresa;

use App\Models\Tenant;


use App\Traits\Util\CepTrait;
use App\Tenant\Traits\CreateDataBase;

use Livewire\Component;




class CadastroEmpresa extends Component
{

    use CepTrait;
    use CreateDataBase;

    public $subdominio;
    public $nome;
    public $status = true;
    public $dados_cadastrais;
    public $sistema_info;
    public $db_database;
    public $db_hostname = "127.0.0.1";
    public $db_username = "root";
    public $db_password = null;
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
    public $numero;
    public $msgAlert = false;
    public $msg = false;
    public $classe = 'alert-warning';
    public $titulo = 'Atenção';
    public $conteudo = 'Não foi possivel localizar o endereço com  o cep informado!';
    public $modoOP = true;
    public $idEmpresa;
    public $tituloPagina;


    public function mount()
    {


        if(!$this->modoOP){


            $tenant = Tenant::find($this->idEmpresa);
            if($tenant->id != 1){
                $this->modoOP = false;
                $this->subdominio= $tenant->subdominio;
                $this->rasao_social = $tenant->rasao_social;
                $this->cnpj = $tenant->cnpj;
                $this->inscricao_estadual = $tenant->inscricao_estadual;
                $this->inscricao_municipal = $tenant->inscricao_municipal;
                $this->telefone_fixo = $tenant->telefone_fixo;
                $this->telefone_celular = $tenant->telefone_celular;
                $this->cep = $tenant->cep;
                $this->endereco = $tenant->endereco;
                $this->numero = $tenant->numero;
                $this->bairro = $tenant->bairro;
                $this->cidade = $tenant->cidade;
                $this->estado = $tenant->estado;
                $this->db_database = $tenant->db_database;
                $this->db_hostname = $tenant->db_hostname;
                $this->db_username = $tenant->db_username;
                $this->db_password = $tenant->db_password;
            }

        }
    }


    protected $rules = [
        'subdominio' => 'required|min:3|unique:tenants',
        'email' => 'required|email',
        'nome'  => 'required|min:3',
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'password' => ['required', 'string', 'min:8', 'confirmed'],
    ];





    public function updated($filed)
    {

        switch ($filed) {
            case 'subdominio':
                $this->validateOnly($filed, ['subdominio' => 'min:3|unique:tenants']);
                break;
            case 'nome':
                $this->validateOnly($filed, ['nome' => 'min:3|unique:tenants']);
                break;
            case 'name':
                $this->validateOnly($filed, ['name' => 'min:3',]);
                break;
            case 'email':
                $this->validateOnly($filed, ['email' => 'min:3|unique:users']);
                break;
            case 'password':
                $this->validateOnly($filed, ['password' => 'min:8|confirmed']);
                break;
            case 'password_confirmation':
                $this->validateOnly($filed, ['password_confirmation' => 'min:8']);
                $this->validateOnly($filed, ['password' => 'confirmed']);
                break;
            case 'db_database':
                //  $this->validateOnly($filed, ['db_database' => 'min:4|unique:tenants']);
                break;
            case 'db_hostname':
                ///   $this->validateOnly($filed, ['db_hostname' => 'min:6']);
                break;
            case 'db_username':
                //   $this->validateOnly($filed, ['db_username' => 'unique:tenants']);
                break;
            case 'db_password':
                //     $this->validateOnly($filed, ['db_password' => 'min:10']);
                break;
            case 'cep':
                $this->msg = true;
                $this->titulo = "Aguarde";
                $this->conteudo = "Consultado o cep para o prenchimeto automatico do endereço.";
                $this->getCep($this->cep);
                break;
            default:
                break;
        }
    }


    public function render()
    {

        return view('livewire.empresa.cadastro-empresa');
    }

    public function save()
    {


        $empresa = [
            'subdominio' => $this->subdominio,
            'nome' => $this->nome,
            'status' => $this->status,
            'sistema_info' => $this->sistema_info,
            'db_database' => $this->db_database ? "wolfx_" . $this->db_database : "wolfx_master",
            'db_hostname' => $this->db_hostname,
            'db_username' => $this->db_username,
            'db_password' => $this->db_password,
            'tipo' => $this->tipo,
            'rasao_social' => $this->rasao_social,
            'inscricao_estadual' => $this->inscricao_estadual,
            'inscricao_municipal' => $this->inscricao_municipal,
            'telefone_celular' => $this->telefone_celular,
            'endereco' => $this->endereco,
            'numero' => $this->numero,
            'bairro' => $this->bairro,
            'cidade' => $this->cidade,
            'estado' => $this->estado,
            'cep' => $this->cep,

        ];
        $userData = [
            'name' => $this->name,
            'email' => $this->email,
            'password' =>   $this->password
        ];


     //

       if(!$this->modoOP){
        $tenantUpdate = Tenant::find($this->idEmpresa);
        $update =  $tenantUpdate->update($empresa);

        dd($update);
       }
       $this->validate();
        $empresaCadastrada =  $this->createTenant($empresa, $userData);

        // ajustar o retorno para resolver a palhaçada abaixo e criar a tela de erro no cadastro
        if (!$empresaCadastrada || $empresaCadastrada ) {
            $this->msgAlert = true;
       }

    }


    public function getCep($cep)
    {
        $endereco =  $this->getEndereco($cep);
        if (isset($endereco->erro)) {
            $this->msg = true;
        } else {
            $this->endereco = $endereco->logradouro;
            $this->bairro = $endereco->bairro;
            $this->cidade = $endereco->localidade;
            $this->estado = $endereco->uf;
        }
        $this->msg = false;
    }
}
