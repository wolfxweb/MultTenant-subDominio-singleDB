Esta é uma estrutura para projeto multi tenancy com laravel e mysql.

Com esta estrutura é possível criar projeto sigle data base ou com múltiplos banco de dados.

-&gt; APP\Tenant está a aparte do código que gerencia os tenant.</br>
-&gt; APP\Events\Tenant fica os eventos que o tenant pode disparar.</br>
-&gt; As rotas do tenant fica dentro routes/tenant.</br>
-&gt; As migrate dos tenant ficam dentro da pasta migrate/tenant.</br>
-&gt; Para excutar as migrate do tenante foi criado um comando que está em app/Console/Commands/Tenant/TenantMigrations.php</br>
-&gt; Esta sendo utlizado para o front-end. o livewire.</br>
-&gt; Confguiração dos componentes livewire (opcional)
