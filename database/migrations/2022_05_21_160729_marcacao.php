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
        Schema::create('marcacao', function (Blueprint $table) {
            $table->id();
            $table->date('data')->notNull();
            $table->string('motivo')->notNull();
            $table->integer('paciente_nif')->notNull();
            $table->foreign('paciente_nif')->references('nif')->on('paciente')->onDelete('cascade');
            $table->integer('funcionario_nif')->notNull();
            $table->foreign('funcionario_nif')->references('nif')->on('funcionario')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('marcacao');
    }
};
