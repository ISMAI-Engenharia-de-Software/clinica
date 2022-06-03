<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servico', function (Blueprint $table) {
            $table->id();
            $table->date('data')->notNull();
            $table->string('nome')->notNull();
            $table->string('tipo')->notNull();
            $table->string('condicoes')->notNull();
            $table->double('gastos')->notNull();
            $table->integer('paciente_nif')->unsigned()->notNull();
            $table->foreign('paciente_nif')->references('nif')->on('paciente')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('servico');
    }
};
