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
        Schema::create('Servico', function (Blueprint $table) {
            $table->id();
            $table->string('Nome')->notNull();
            $table->string('Tipo')->notNull();
            $table->string('Condicoes')->notNull();
            $table->integer('Gastos')->notNull();
            $table->foreignId('Paciente_NIF')->notNull();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
