
<div class="form-floating {{ isset($classe) ? $classe : 'col-md-12'}} p-1">

    <input wire:model.lazy = "{{$wireNome}}" type="{{isset($type) ? $type : 'text'}}" class="{{isset($classeInput) ? $classeInput:'form-control '}}   " id="{{$idInput}}" placeholder="{{$label}}" >
    <label for="{{$idInput}} " class="">{{ $label }}</label>
</div>

