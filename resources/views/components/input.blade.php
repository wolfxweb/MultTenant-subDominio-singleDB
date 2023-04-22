

<div class="form-floating {{ isset($classe) ? $classe : 'col-md-12' }} p-1" >
    <input name="{{ $wireNome }}" wire:model.lazy="{{ $wireNome }}" type="{{ isset($type) ? $type : 'text' }}"class="{{ isset($classeInput) ? $classeInput : 'form-control ' }} @error($wireNome) is-invalid @enderror " id="{{ $idInput }}" placeholder="{{ $label }} "  x-ref="{{$wireNome}}">
    <label for="{{ $idInput }} " class="">{{ $label }} </label>
    @error($wireNome) <span class="error text-danger">{{ $message }}</span> @enderror
    <div class="spinner-border spinner-border-sm" role="status" id="spinner-{{ $wireNome }}" hidden>
        <span class="visually-hidden">Loading...</span>
    </div>
</div>
