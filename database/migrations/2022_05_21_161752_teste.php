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
        Schema::create('Teste', function (Blueprint $table) {
            $table->id();
            $table->date('Data')->notNull();
            $table->string('TipoTeste')->notNull();
            $table->string('Resultado')->notNull();
            $table->string('Observacoes')->notNull()->unique();
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
        Schema::dropIfExists('Teste');
    }
};
