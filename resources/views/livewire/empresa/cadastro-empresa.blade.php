@php
$arrayInputs = [
    'dominio' => [
        'wireNome' => 'subdominio',
        'label' => 'Dominio',
        'idInput' => 'inp_subdominio',
        'classe' => 'col-md-6',
    ],
    'nome' => [
        'wireNome' => 'nome',
        'label' => 'Nome',
        'idInput' => 'inp_nome',
        'classe' => 'col-md-6',
    ],
    'rasao_social' => [
        'wireNome' => 'rasao_social',
        'label' => 'Rasão social',
        'idInput' => 'inp_rasao_social',
        'classe' => 'col-md-12',
    ],
    'cnpj' => [
        'wireNome' => 'cnpj',
        'label' => 'CNPJ/CPF',
        'idInput' => 'inp_cnpj',
        'classe' => 'col-md-4',
    ],
    'inscricao_estadual' => [
        'wireNome' => 'inscricao_estadual',
        'label' => 'Inscrição Estadual',
        'idInput' => 'inp_inscricao_estadual',
        'classe' => 'col-md-4',
    ],
    'inscricao_municipal' => [
        'wireNome' => 'inscricao_municipal',
        'label' => 'Inscrição  municipal',
        'idInput' => 'inp_inscricao_municipal',
        'classe' => 'col-md-4',
    ],
    'telefone_fixo' => [
        'wireNome' => 'telefone_fixo',
        'label' => 'Telefone fixo',
        'idInput' => 'inp_telefone_fixo',
        'classe' => 'col-md-6',
    ],
    'telefone_celular' => [
        'wireNome' => 'telefone_celular',
        'label' => 'Telefone celular',
        'idInput' => 'inp_telefone_celular',
        'classe' => 'col-md-6',
    ],
    'endereco' => [
        'wireNome' => 'endereco',
        'label' => 'Endereço',
        'idInput' => 'inp_endereco',
        'classe' => 'col-md-9',
    ],
    'numero' => [
        'wireNome' => 'numero',
        'label' => 'Numero',
        'idInput' => 'inp_numero',
        'classe' => 'col-md-3',
    ],
    'bairro' => [
        'wireNome' => 'bairro',
        'label' => 'Bairro',
        'idInput' => 'inp_bairro',
        'classe' => 'col-md-3',
    ],
    'cidade' => [
        'wireNome' => 'cidade',
        'label' => 'cidade',
        'idInput' => 'inp_cidade',
        'classe' => 'col-md-3',
    ],
    'estado' => [
        'wireNome' => 'estado',
        'label' => 'Estado',
        'idInput' => 'inp_estado',
        'classe' => 'col-md-3',
    ],
    'cep' => [
        'wireNome' => 'cep',
        'label' => 'cep',
        'idInput' => 'inp_cep',
        'classe' => 'col-md-3',
    ],

    'status' => [
        'wireNome' => 'status',
        'label' => 'Status',
        'idInput' => 'inp_status',
        'classe' => 'col-md-6',
    ],
    'tipo' => [
        'wireNome' => 'tipo',
        'label' => 'Tipo',
        'idInput' => 'inp_tipo',
        'classe' => 'col-md-6',
    ],
    'db_database' => [
        'wireNome' => 'db_database',
        'label' => 'Nome Banco de dados',
        'idInput' => 'inp_db_database',
        'classe' => 'col-md-3',

    ],
    'db_hostname' => [
        'wireNome' => 'db_hostname',
        'label' => 'Host do Banco de dados',
        'idInput' => 'inp_db_hostname',
        'classe' => 'col-md-3',
    ],
    'db_username' => [
        'wireNome' => 'db_username',
        'label' => 'Usuário do banco de dados',
        'idInput' => 'inp_db_username',
        'classe' => 'col-md-3',
    ],
    'db_password' => [
        'wireNome' => 'db_password',
        'label' => 'Senha do Banco de dados',
        'idInput' => 'inp_db_password',
        'classe' => 'col-md-3',
    ],
    'name' => [
        'wireNome' => 'name',
        'label' => 'Nome ',
        'idInput' => 'name',
        'classe' => 'col-md-3',
    ],
    'email' => [
        'wireNome' => 'email',
        'label' => 'Email',
        'idInput' => 'email',
        'classe' => 'col-md-3',
    ],
    'password' => [
        'wireNome' => 'password',
        'label' => 'Senha de acesso',
        'idInput' => 'password',
        'classe' => 'col-md-3',
    ],
    'password_confirmation' => [
        'wireNome' => 'password_confirmation',
        'label' => 'Confrime sua senha de acesso',
        'idInput' => 'password_confirmation',
        'classe' => 'col-md-3',
    ],
];

@endphp


<div class="container shadow p-3 mb-5 bg-body rounded">

    @component('components.card', ['titulo' => 'Cadastro Empresa', 'classeCol' => 'col-md-12 ', 'classeHeader' =>
        'card-title p-2 text-white bg-primary'])
        <form wire:submit.prevent="save">
            <div class="row ">
                <h4>{{ __('Informações Cadastrais') }}</h4>

                @foreach ($arrayInputs as $input)


                    @if ($input['wireNome'] != 'status' && $input['wireNome'] != 'tipo' )
                          @include('components.input',['wireNome'=>$input['wireNome'],'label'=>$input['label'],'idInput'=>$input['idInput'],'classe'=>$input['classe']])
                    @endif
                    @if ($loop->iteration == 14)
                        <hr class="pt-1 mt-2">
                        <h4>{{ __('Informações da conta') }}</h4>
                        @include('components.checkboxSwitch',['titulo'=>'Status da conta','wireModel'=>'status' ,'msg1'=>'Ativo','msg2'=>'Inativo', 'ativarClasse'=>'true'])
                    @endif

                    @if ($loop->iteration == 15)

                      @include('components.checkboxSwitch',['titulo'=>'Plano ','wireModel'=>'tipo' ,'msg1'=>'Bronze','msg2'=>'Prata', 'ativarClasse'=>''])
                    @endif
                    @if ($loop->iteration == 16)
                        <hr class="pt-1 mt-2">
                        <h4>{{ __('Configuração do banco de dados') }}</h4>
                    @endif
                    @if ($loop->iteration == 20)
                        <hr class="pt-1 mt-2">
                        <h4>{{ __('Informações do usuário adminstrador') }}</h4>
                    @endif
                @endforeach
                <hr class="pt-1 mt-2">
            </div>
            <button  type="submit" class="btn btn-primary">Submit</button>
        </form>
    @endcomponent

</div>
