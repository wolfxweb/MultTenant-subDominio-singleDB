@php
use App\ClassesEstaticas\ConfigInputs\MenuItens as MenuItens;

$MenuItensEmpresa = MenuItens::configInputEmpresa();
$MenuItensCategoria = MenuItens::configInputCategorias();

@endphp


<div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-{{ $titulo }}" aria-expanded="false" aria-controls="flush-{{ $titulo }}">
            {{ $titulo }}
        </button>
    </h2>
    <div id="flush-{{ $titulo }}" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
        data-bs-parent="#accordionFlushExample">
        <div class="list-group list-group-flush pb-2 ">
            @if ($titulo == 'Empresa')
                @foreach ($MenuItensEmpresa as $MenuIten)
                {{var_dump($MenuIten)}}
                  <a href="{{ route('lista-empresas') }}" class="list-group-item list-group-item-action bg-danger text-white">{{ $MenuIten['titulo']}}</a>
                @endforeach
            @endif
        </div>
        @if ($titulo == 'Categoria')
            @foreach ($MenuItensCategoria as $MenuIten)
                {{ var_dump($MenuIten) }}
            @endforeach
        @endif



    </div>
</div>
