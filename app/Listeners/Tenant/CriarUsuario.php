<?php

namespace App\Listeners\Tenant;

use App\Events\Tenant\TenantCriado;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class CriarUsuario
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\Tenant\TenantCriado  $event
     * @return void
     */
    public function handle(TenantCriado $event)
    {
        //
    }
}
