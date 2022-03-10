<?php
namespace App\classesEstaticas\ConfigInputs;

class UsuarioInput{
    public static function configInput(){
        return[
         'name' => [
             'wireNome' => 'name',
             'label' => 'Nome ',
             'idInput' => 'name',
             'classe' => 'col-md-3',
             'type'=>'text'


         ],
         'email' => [
             'wireNome' => 'email',
             'label' => 'Email',
             'idInput' => 'email',
             'classe' => 'col-md-3',
             'type'=>'email'

         ],
         'password' => [
             'wireNome' => 'password',
             'label' => 'Senha de acesso',
             'idInput' => 'password',
             'classe' => 'col-md-3',
             'type'=>'password'

         ],
         'password_confirmation' => [
             'wireNome' => 'password_confirmation',
             'label' => 'Confrime sua senha de acesso',
             'idInput' => 'password_confirmation',
             'classe' => 'col-md-3',
             'type'=>'password'

         ]
        ];
     }


}
