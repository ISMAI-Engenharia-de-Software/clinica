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
            $table->string('nome')->notNull();
            $table->string('tipo')->notNull();
            $table->string('condicoes')->notNull();
            $table->integer('gastos')->notNull();
            $table->int('paciente_nif')->notNull();
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
