<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTenantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenants', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->string('subdominio')->unique();
            $table->string('nome')->unique();
            $table->boolean('status')->default(true);
            $table->text('sistema_info')->nullable();
            $table->uuid('uuid')->nullable();
            $table->string('db_database')->nullable();
            $table->string('db_hostname')->nullable();
            $table->string('db_username')->nullable();
            $table->string('db_password')->nullable();
            $table->string('tipo')->default(true);
            $table->string('logo')->nullable();
            $table->string('rasao_social')->nullable();
            $table->string('cnpj')->nullable();
            $table->string('inscricao_estaduall')->nullable();
            $table->string('inscricao_municipal')->nullable();
            $table->string('telefone_fixo')->nullable();
            $table->string('telefone_celular')->nullable();
            $table->string('endereco')->nullable();
            $table->string('numero')->nullable();
            $table->string('bairro')->nullable();
            $table->string('cidade')->nullable();
            $table->string('estado')->nullable();
            $table->string('cep')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tenants');
    }
}
