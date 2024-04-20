# Estrutura para Projeto Multi Tenancy com Laravel e MySQL

Esta é uma estrutura para projetos multi tenancy desenvolvidos em Laravel e MySQL, oferecendo a flexibilidade de criar projetos com um único banco de dados ou com múltiplos bancos de dados.

## Descrição

Nesta estrutura, você encontrará os seguintes elementos:

- **APP\Tenant**: Esta é a parte do código responsável por gerenciar os tenants, ou seja, os inquilinos do sistema.
- **APP\Events\Tenant**: Aqui estão os eventos que podem ser disparados pelos tenants.
- **Rotas do Tenant**: As rotas específicas do tenant estão localizadas dentro de `routes/tenant`.
- **Migrations do Tenant**: As migrações relacionadas aos tenants estão na pasta `migrate/tenant`.
- **Comando para Executar Migrações do Tenant**: Foi criado um comando para executar as migrações do tenant, localizado em `app/Console/Commands/Tenant/TenantMigrations.php`.
- **Front-end com Livewire**: Este projeto utiliza Livewire para o front-end.
- **Configuração dos Componentes Livewire (Opcional)**: Instruções opcionais para configurar os componentes Livewire.

## Utilização

Para utilizar esta estrutura em seu projeto:

1. Clone este repositório.
2. Configure seu ambiente Laravel conforme necessário.
3. Siga as instruções específicas para cada componente mencionado acima.
4. Personalize conforme necessário para atender às necessidades do seu projeto.

## Contribuições

Contribuições são bem-vindas! Sinta-se à vontade para abrir issues ou pull requests se encontrar bugs, tiver sugestões de melhorias ou quiser adicionar novos recursos.

## Licença

Este projeto está licenciado sob a [Licença MIT](LICENSE).

