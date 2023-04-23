@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @component('components.card', [
                'classeCol' => 'col-md-12 ',
                'classeHeader' => 'card-header bg-secondary text-white',
                'titulo' => 'Agendas',
            ])
           
                <div class="container text-center">
                    <div class="row align-items-start p-0">
                        <div class="col-12">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link text-secondary active" id="home-tab" data-bs-toggle="tab"
                                        data-bs-target="#agendamento" type="button" role="tab" aria-controls="home"
                                        aria-selected="true">{{ __('Agendamentos') }}</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link text-secondary " id="profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#cadastro-edicao" type="button" role="tab" aria-controls="profile"
                                        aria-selected="false">{{ __('Cadastrar') }}</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link text-secondary " id="profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#agendas-cadastradas" type="button" role="tab"
                                        aria-controls="profile" aria-selected="false">{{ __('Agendas cadastradas') }}</button>
                                </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="agendamento" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="row align-items-start p-0">
                                        <div class="col-12">
                                            agendamentos
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="cadastro-edicao" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="row  p-0">
                                        <div class="col-12">
                                            <div class="pt-2">
                                                <div class="alert alert-secondary" role="alert">
                                                    {{ __('Cadatro de agenda') }}
                                                </div>
                                                <form class="row g-3 ">
                                                    <div class="col-md-6">

                                                        <select id="inputState form-floating" class="form-select">
                                                            <option selected>{{ __('Selecione um usuário') }}</option>
                                                            <option>...</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6">

                                                        <select id="inputState form-floating" class="form-select">
                                                            <option selected>{{ __('Selecione dia da semana') }}</option>
                                                            <option>Segunda</option>
                                                            <option>Treça feira</option>
                                                            <option>Quarta feira</option>
                                                            <option>Quinta feira</option>
                                                            <option>Sexta feira</option>
                                                            <option>Sabado</option>
                                                            <option>Domingo</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6">

                                                        <input class="form-control" id="disabledInput" type="time">
                                                    </div>
                                                    <div class="col-md-6">

                                                        <input class="form-control" id="disabledInput" type="time">
                                                    </div>
                                                    <div class="col-md-12 flex-row-reverse">
                                                        <button type="button" onclick="adicionarHorario()"
                                                            class="btn btn-success float-end">{{ __('Adicionar horario') }}</button>
                                                    </div>
                                                    <hr>
                                                    <div id="div-tabela-agenda">
                                                        <table class="table table-responsive table-striped table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">{{ __('Usuário') }}</th>
                                                                    <th scope="col">{{ __('Dia da semana') }}</th>
                                                                    <th scope="col">{{ __('Horario inicial') }}</th>
                                                                    <th scope="col">{{ __('Horario final') }}</th>
                                                                    <th scope="col">{{ __('Ação') }}</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="tabela-horarios-agenda">
                                                                <tr>
                                                                    <th>2</th>
                                                                    <td>Jacob</td>
                                                                    <td>Thornton</td>
                                                                    <td>H</td>
                                                                    <td>@fat</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <hr>
                                                        <div class="col-md-12 flex-row-reverse">
                                                            <button type="button"
                                                                class="btn btn-success float-end">{{ __('Salvar agenda') }}</button>
                                                        </div>
                                                    </div>

                                                </form>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="agendas-cadastradas" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="row align-items-start p-0">
                                        <div class="col-12">
                                            agendas cadastradas
                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endcomponent
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        adicionarHorario(){
            alert("asdas")
          }
        $(document).ready(function(){
         
        });
    </script>
@endsection
