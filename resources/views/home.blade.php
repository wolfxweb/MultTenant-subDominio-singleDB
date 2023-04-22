@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
 
      @component('components.card',['classeCol'=>'col-md-12 ', 'classeHeader'=>'card-header bg-secondary text-white','titulo'=>'Dashboard'])
      <div class="container text-center">
        <div class="row align-items-start p-0">
          <div class="col-3">
          
          </div>
          <div class="col-9">
            One of three columns
          </div>
         
        </div>
      </div>
      @endcomponent
    </div>
</div>
@endsection


