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
        Schema::create('Internamento', function (Blueprint $table) {
            $table->id();
            $table->date('Data')->notNull();
            $table->date('Data_admissao')->notNull();
            $table->bool('Internado')->notNull();
            $table->string('Observacoes')->notNull();
            $table->double('Gastos')->notNull();
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
        Schema::dropIfExists('Internamento');
    }
};