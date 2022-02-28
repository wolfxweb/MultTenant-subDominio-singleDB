<?php

namespace App\Listeners\Tenant;

use App\Events\Tenant\TenantCriado;
use App\Tenant\BD\DatabaseTenantManager;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class CriarBancoDados
{
    private $database;
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct( DatabaseTenantManager $database )
    {
        $this->database=  $database;
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\Tenant\TenantCriado  $event
     * @return void
     */
    public function handle(TenantCriado $event)
    {
        $tenant =  $event->getTenant();
        $this->database->criarBancoDados($tenant);

    }
}
