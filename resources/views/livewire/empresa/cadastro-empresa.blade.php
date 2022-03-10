@php
    use App\ClassesEstaticas\ConfigInputs\EmpresaInput as Empresa;
    use App\ClassesEstaticas\ConfigInputs\UsuarioInput as Usuario;
    use App\ClassesEstaticas\ConfigInputs\BancoDadosInput as BancoDados;
    $arrayInputs = Empresa::configInput();
    $bancoDados  = BancoDados::configInput();
    $userData    = Usuario::configInput();
@endphp


<div class="container shadow p-3 mb-5 bg-body rounded">
    @if ($msg)
      @include('components.alert',['classe'=>$classe,'titulo'=>$titulo,'conteudo'=>$conteudo])
    @endif
   @if ($msgAlert)

         @component('components.card', ['titulo' => 'Cadastro Realizado com sucesso', 'classeCol' => 'col-md-12 ', 'classeHeader' =>'card-title p-2 text-white bg-success'])
            <h3> Seja bem vindo</h3>
            <hr>
            <h6>  Voce pode acessar o sistema pelo endereço copiando e colando está urla no seu navegador <strong> http://{{$subdominio}}.localhost:8000/login </strong> , ou pelo botão abaixo. </h6>
            <p> O login e senha de acesso é o que mesmo   que foi criado no mometo do cadastro.</p>
            <a class="btn btn-primary" href="http://{{$subdominio}}.localhost:8000/login" role="button" target="_blank">Acessar o sistema</a>
         @endcomponent
   @endif
   @if (!$msgAlert)
   {{$idEmpresa}} - {{$modoOP}}
        @component('components.card', ['titulo' => $tituloPagina, 'classeCol' => 'col-md-12 ', 'classeHeader' =>'card-title p-2 text-white bg-primary'])
            <form wire:submit.prevent="save">
                <div class="row ">
                    <h4>{{ __('Informações Cadastrais') }}</h4>
                    @foreach ($arrayInputs as $input)
                        @include('components.input',['wireNome'=>$input['wireNome'],'label'=>$input['label'],'idInput'=>$input['idInput'],'classe'=>$input['classe']])

                    @endforeach
                    <hr class="pt-1 mt-2">
                    <h4>{{ __('Informações da conta') }}</h4>
                        @include('components.checkboxSwitch',['titulo'=>'Status da conta','wireModel'=>'status' ,'msg1'=>'Ativo','msg2'=>'Inativo', 'ativarClasse'=>'true'])
                        @include('components.checkboxSwitch',['titulo'=>'Plano','wireModel'=>'tipo','msg1'=>'Bronze','msg2'=>'Prata', 'ativarClasse'=>''])
                    @if ($tipo)
                        <hr class="pt-1 mt-2">
                        <h4>{{ __('Informações banco de dados') }}</h4>
                        @foreach ($bancoDados as $input)
                            @include('components.input',['wireNome'=>$input['wireNome'],'label'=>$input['label'],'idInput'=>$input['idInput'],'classe'=>$input['classe'] , 'type'=>$input['type']])
                        @endforeach
                    @endif

                    @if ($modoOP)
                    <hr class="pt-1 mt-2">
                    <h4>{{ __('Informações do usuário administrador') }}</h4>
                        @foreach ($userData as $input)
                            @include('components.input',['wireNome'=>$input['wireNome'],'label'=>$input['label'],'idInput'=>$input['idInput'],'classe'=>$input['classe'], 'type'=>$input['type']])
                        @endforeach
                    @endif

                </div>

                <button type="submit" class="btn btn-primary">{{$modoOP?'Cadastrar':'Editar'}}</button>

            </form>
        @endcomponent
    @endif
</div>
@section('scripts')
    <script>
        $(document).ready(function(){
            $('input[name=telefone_celular]').mask('(99) 9 9999-9999');
            $('input[name=telefone_fixo]').mask('(99) 9999-9999');
            $('input[name=cep]').mask('99999-999');
        });
    </script>
@endsection
