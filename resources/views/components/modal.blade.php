
<div class="modal fade " id="{{$idModal}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered {{$tamanhoModal}}">
      <div class="modal-content">
        <div class="modal-header {{$classeFundo}}">
          <h5 class="modal-title" id="exampleModalLabel">{{__($titulo)}}</h5>
          <button type="button" class="btn btn-close btn-light" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

         @if ($modo == 'ex')
         ecluit


         @endif
         @if ($modo == 'ed')

           @livewire('empresa.cadastro-empresa',['modoOP'=>false,'tituloPagina'=>"Edição Empresa",'idEmpresa'=>$tenant->id] )
         @endif

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{__('Cancelar')}}</button>
        </div>
      </div>
    </div>
  </div>
