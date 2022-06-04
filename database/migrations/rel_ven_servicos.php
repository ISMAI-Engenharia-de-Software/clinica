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
      Schema::create('rel_ven_servicos', function (Blueprint $table) {
        $table->id();
        $table->date('data_inicio')->notNull();
        $table->date('data_final')->notNull();
        $table->integer('nif_paciente')->notNull();
			  $table->string('nome_paciente')->notNull();
			  $table->string('tipo_servico')->notNull();
			  $table->double('preco')->notNull()->default(0.0);
        $table->string('anotacoes')->notNull();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rel_ven_servicos');
    }
};
