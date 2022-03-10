<?php
namespace App\classesEstaticas\ConfigInputs;


class BancoDadosInput{
    public static function configInput(){

        return[
            'db_database' => [
                'wireNome' => 'db_database',
                'label' => 'Nome Banco de dados',
                'idInput' => 'inp_db_database',
                'classe' => 'col-md-3',
                'type'=>'text'

            ],
            'db_hostname' => [
                'wireNome' => 'db_hostname',
                'label' => 'Host do Banco de dados',
                'idInput' => 'inp_db_hostname',
                'classe' => 'col-md-3',
                'type'=>'text'

            ],
            'db_username' => [
                'wireNome' => 'db_username',
                'label' => 'Usuário do banco de dados',
                'idInput' => 'inp_db_username',
                'classe' => 'col-md-3',
                'type'=>'text'

            ],
            'db_password' => [
                'wireNome' => 'db_password',
                'label' => 'Senha do Banco de dados',
                'idInput' => 'inp_db_password',
                'classe' => 'col-md-3',
                'type'=>'password'
            ],
        ];
    }
}


