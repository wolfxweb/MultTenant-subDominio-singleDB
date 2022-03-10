<?php
namespace App\classesEstaticas\ConfigInputs;
//configuração do formulrio de cadastro
class EmpresaInput
{
    public static function configInput(){
        return [
            'dominio' => [
                'wireNome' => 'subdominio',
                'label' => 'Dominio',
                'idInput' => 'inp_subdominio',
                'classe' => 'col-md-6',
                'alpine' => false,

            ],
            'nome' => [
                'wireNome' => 'nome',
                'label' => 'Nome Fantasia',
                'idInput' => 'inp_nome',
                'classe' => 'col-md-6',
                'alpine' => false,

            ],
            'rasao_social' => [
                'wireNome' => 'rasao_social',
                'label' => 'Rasão social',
                'idInput' => 'inp_rasao_social',
                'classe' => 'col-md-12',
                'alpine' => false,

            ],
            'cnpj' => [
                'wireNome' => 'cnpj',
                'label' => 'CNPJ/CPF',
                'idInput' => 'inp_cnpj',
                'classe' => 'col-md-4',
                'alpine' => false,

            ],
            'inscricao_estadual' => [
                'wireNome' => 'inscricao_estadual',
                'label' => 'Inscrição Estadual',
                'idInput' => 'inp_inscricao_estadual',
                'classe' => 'col-md-4',
                'alpine' => false,

            ],
            'inscricao_municipal' => [
                'wireNome' => 'inscricao_municipal',
                'label' => 'Inscrição municipal',
                'idInput' => 'inp_inscricao_municipal',
                'classe' => 'col-md-4',
                'alpine' => false,

            ],
            'telefone_fixo' => [
                'wireNome' => 'telefone_fixo',
                'label' => 'Telefone fixo',
                'idInput' => 'inp_telefone_fixo',
                'classe' => 'col-md-6',
                'alpine' => true,

            ],
            'telefone_celular' => [
                'wireNome' => 'telefone_celular',
                'label' => 'Telefone celular',
                'idInput' => 'inp_telefone_celular',
                'classe' => 'col-md-6',
                'alpine' => true,

            ],
            'cep' => [
                'wireNome' => 'cep',
                'label' => 'Cep',
                'idInput' => 'inp_cep',
                'classe' => 'col-md-3',
                'alpine' => false,

            ],
            'endereco' => [
                'wireNome' => 'endereco',
                'label' => 'Endereço',
                'idInput' => 'inp_endereco',
                'classe' => 'col-md-9',
                'alpine' => false,

            ],
            'numero' => [
                'wireNome' => 'numero',
                'label' => 'Numero',
                'idInput' => 'inp_numero',
                'classe' => 'col-md-3',
                'alpine' => false,

            ],
            'bairro' => [
                'wireNome' => 'bairro',
                'label' => 'Bairro',
                'idInput' => 'inp_bairro',
                'classe' => 'col-md-3',
                'alpine' => false,

            ],
            'cidade' => [
                'wireNome' => 'cidade',
                'label' => 'Cidade',
                'idInput' => 'inp_cidade',
                'classe' => 'col-md-3',
                'alpine' => false,

            ],
            'estado' => [
                'wireNome' => 'estado',
                'label' => 'Estado',
                'idInput' => 'inp_estado',
                'classe' => 'col-md-3',
                'alpine' => false,

            ]

        ];
    }


}
