Esta é uma estrutura para projeto multi tenancy com laravel e mysql.

Com esta estrutura é possível criar projeto sigle data base ou com múltiplos banco de dados.

-&gt; APP\Tenant está a aparte do código que gerencia os tenant.
-&gt; APP\Events\Tenant fica os eventos que o tenant pode disparar
-&gt; As rotas do tenant fica dentro routes/tenant
-&gt; As migrate dos tenant ficam dentro da pasta migrate/tenant
-&gt; Para excutar as migrate do tenante foi criado um comando que está em app/Console/Commands/Tenant/TenantMigrations.php
-&gt; Esta sendo utlizado para o front-end. o livewire.
-&gt; Confguiração dos componentes livewire (opcional)
