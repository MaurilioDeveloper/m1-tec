<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePessoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cod_estado')->unsigned();
            $table->foreign('cod_estado')->reference('cod_estado')->on('estado');
            $table->string('nome');
            $table->string('email');
            $table->string('rg');
            $table->string('cpf');
            $table->string('cnpj');
            $table->char('tipo');
            $table->string('celular');
            $table->string('telefone');
            $table->text('mensagem');
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
        Schema::drop('pessoas');
    }
}
