<?php

namespace App\classesEstaticas\ConfigInputs;

class MenuItens
{
    public static function configInputEmpresa()
    {
        return [
            'empresas' => [
                'titulo' => 'Lista empresas',
                'apelido-rota' => 'lista-empresas',
                'icone' => 'format_list_bulleted',
                'rota' => '',

            ],

        ];
    }
    public static function configInputCategorias()
    {
        return [
            'categorias' => [
                'titulo' => 'Lista Categorias',
                'apelido-rota' => 'lista-empresas',
                'icone' => 'format_list_bulleted',
                'rota' => '',

            ],
            'categorias-cadastrar' => [
                'titulo' => 'Cadastrar Categorias',
                'apelido-rota' => 'lista-empresas',
                'icone' => 'format_list_bulleted',
                'rota' => '',

            ],

        ];
    }
    public static function configColunaTabela()
    {
        return [
            'id' => 'ID',
            'subdominio' => 'Subdominio',
            'nome' => 'Nome',
            'status' => 'Status',
            'status' => 'Status',
            'tipo'=> 'Plano',
            'db_database' => 'Banco de dados',

            //  'db_hostname' => 'Host banco de dados',
            //  'db_username' => 'Usuário banco de dados',
            //  'rasao_social' => 'rasao_social',
            //  'cnpj' => 'cnpj',
            //  'inscricao_estadual' => 'Inscrição estadual',
            //  'inscricao_municipal' => 'Inscrição municipal',
            //  'telefone_fixo' => 'Telefone',
            //  'telefone_celular' => 'Telefone celular',
            //  'endereco' => 'Endereço',
            //  'numero' =>    'Numero',
            //  'bairro' => 'Bairro',
            // 'cidade' =>    'Cidade',
            // 'estado' => 'Estado',
            // 'cep' =>    'CEP',
            // 'sistema_info' => 'Sistema Info',
            // 'uuid' => 'uuid',
            'acao' => 'Ações'

        ];
    }
}
