@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

      @component('components.card',['classeCol'=>'col-md-12 ', 'classeHeader'=>'card-header bg-primary text-white','titulo'=>'Dashboard'])
      __('You are logged in!')
      @endcomponent
    </div>
</div>
@endsection


