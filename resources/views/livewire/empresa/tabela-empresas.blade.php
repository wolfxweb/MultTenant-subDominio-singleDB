@php
use App\ClassesEstaticas\ConfigInputs\MenuItens as MenuItens;

$MenuItensColunaTabela = MenuItens::configColunaTabela();

@endphp




<div>
    @component('components.card', ['classeCol' => 'col-md-12 ', 'classeHeader' => 'card-header bg-secondary text-white',
        'titulo' => 'Empresas'])
        <div class="btn-group" role="group" aria-label="Basic example">
            <a href="{{ route('cadastro-empresa') }}" class="btn btn-primary"> {{__('Cadastrar')}}</a>
            <button type="button" class="btn btn-secondary ">{{__('Localizar')}}</button>
        </div>
        <hr>
        @component('components.table', ['MenuItensColunaTabela' => $MenuItensColunaTabela])
            @foreach ($tenants as $ten)
                    <th scope="row">{{ $ten->id }}</th>
                    <td>{{ $ten->subdominio  }}</td>
                    <td>{{ $ten->nome }}</td>
                    <td>{{ $ten->status == 1? 'Ativo': 'Inativo' }}</td>
                    <td>{{ $ten->tipo == 1 ? 'Master':'Single' }}</td>
                    <td>{{ $ten->db_database }}</td>
                    <td>
                        @if ($ten->subdominio != config('tenant.subdominio_master'))
                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                <button  type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#{{$ten->subdominio}}editar">{{__('Editar')}}</button>
                                <button  type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#{{$ten->subdominio}}excluir">{{__('Excluir')}}</button>
                            </div>
                        @endif
                    @include('components.modal',['tenant'=> $ten,'idModal'=>$ten->subdominio.'excluir','titulo'=>'','classeFundo'=>'bg-danger text-white','modo'=>'ex','tamanhoModal'=>''])
                    @include('components.modal',['tenant'=> $ten,'idModal'=>$ten->subdominio.'editar','titulo'=>'','classeFundo'=>'bg-primary text-white','modo'=>'ed','tamanhoModal'=>'modal-xl'])
                    </td>
                </tr>
            @endforeach
        @endcomponent
    @endcomponent
</div>

