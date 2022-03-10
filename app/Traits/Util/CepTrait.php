<?php

namespace  App\Traits\Util;


trait  CepTrait{


    public function getEndereco($cep){
        $endereco = file_get_contents('https://viacep.com.br/ws/'. $cep . '/json/');

        return json_decode($endereco);
    }


}
