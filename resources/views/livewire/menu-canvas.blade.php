<div >
    @component('components.menuLateral')
        @tenantAdm()
           @include('components.accordion-item-menu', ['titulo' => 'Empresa'])
        @endtenantAdm

        @include('components.accordion-item-menu', ['titulo' => 'Categoria'])
        @include('components.accordion-item-menu', ['titulo' => 'Agenda'])
    @endcomponent
</div>
