

Esta é uma estrutura para projeto multi tenancy com laravel e mysql.

Com esta estrutura é possivel criar projeto sigle data base ou com multiplos banco de dados.

-> APP\Tenant está a aprate do codigo que gerencia os tenant.<br>
-> APP\Events\Tenant fica os enventos que o tenant pode disparar<br>
-> As rotas do tenant fica dentro routes/tenant<br>
-> As migrate dos tenant fican dentro da pasta migrate/tenant<br>
-> Para excutar as migrate do tenante foi criado um comnado que está em app/Console/Commands/Tenant/TenantMigrations.php <br>
-> Esta sendo utlizado para o front-end o livewire.<br>
-> Confguiração dos componentes livewire (opicional voce pode usar qualquer outro mentodo de configuração do componente do livewire), Eu opitei esta abordagem pois para depois implmentrar interfrace no projeto fica mais facil.<br>
