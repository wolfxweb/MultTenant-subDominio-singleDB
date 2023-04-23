<div id="{{$idSelect}}" class="form-floating  {{ isset($classe) ? $classe : 'col-md-12' }} p-1">
    <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
     <!-- adicianar os item  do select no slot -->
        {{$slot??''}}
    </select>
    <label for="floatingSelect">{{ $label }}</label>
    {{-- @error($wireNome) <span class="error text-danger">{{ $message }}</span> @enderror
    <div class="spinner-border spinner-border-sm" role="status" id="spinner-{{ $wireNome }}" hidden>
        <span class="visually-hidden">Loading...</span>
    </div> --}}
  </div>



