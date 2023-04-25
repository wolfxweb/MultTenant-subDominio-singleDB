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
                                                <form class="row g-3 " wire:submit.prevent="create">
                                                    <div class="col-md-6">
                                                        <div>
                                                            <input wire:model="message" type="text">
                                                         
                                                            <h1>{{ $message }}</h1>
                                                        </div>
                                                
                                                    <select wire:model="usuario_selecionado" class="form-select">
                                                        <option value="" >Open this select menu</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                      </select>
                                                      {{$usuario_selecionado}}
                                                      @error('usuario_selecionado') {{$usuario_selecionado}} @enderror"
                                                    </div>
                                                    <div class="col-md-6">
                                                        @component('components.select',['idSelect'=>'usuario-select','classe'=>'','label'=>'Selecione um usuario','wireNome'=>'diaSemana'])
                                                        <option value="7" >{{ __('Selecione dia da semana') }}</option>
                                                        <option value="1">Segunda</option>
                                                        <option value="2">Treça feira</option>
                                                        <option value="3">Quarta feira</option>
                                                        <option value="4">Quinta feira</option>
                                                        <option value="5">Sexta feira</option>
                                                        <option value="6">Sabado</option>
                                                        <option value="0">Domingo</option>
                                                          
                                                        @endcomponent
                                                        {{$diaSemana}}

                                                    </div>
                                                    <div class="col-md-6">
                                                   
                                                        @include('components.input',['wireNome'=>'horarioInicio','label'=>'Hora de inicio','idInput'=>'horario-inicio','classe'=>'', 'type'=>'time'])
                              
                                                    </div>
                                                    <div class="col-md-6">
                                                        @include('components.input',['wireNome'=>'horaFinal','label'=>'Hora de inicio','idInput'=>'horario-final','classe'=>'', 'type'=>'time'])

                                                    </div>
                                                    <button type="submit" class="btn btn-dark">Dark</button> 
                                                    <div class="col-md-12 flex-row-reverse">
                                                        <button type="button" onclick="adicionarHorario()"
                                                            class="btn btn-success float-end">{{ __('Adicionar horario') }}</button>
                                                    </div>
                                                </form>

                                                <hr>
                                                <div id="div-tabela-agenda">
                                                    <table class="table table-responsive table-striped table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">{{ __('Usuário') }}</th>
                                                                <th scope="col">{{ __('Dia da semana') }}</th>
                                                                <th scope="col">{{ __('Horarios') }}</th>
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


                                                </div>


                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="agendas-cadastradas" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="row align-items-start p-0">
                                        <div class="col-12">
                                            agendas cadastrada

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
        adicionarHorario() {
            alert("asdas")
        }
        $(document).ready(function() {

        });
    </script>
@endsection
