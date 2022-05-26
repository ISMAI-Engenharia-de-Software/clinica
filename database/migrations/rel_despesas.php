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
        Schema::create('rel_despesas', function (Blueprint $table) {
            $table->id();
            $table->int('Data_Inicio')->notNull();
            $table->date('Data_Final')->notNull();
            $table->bool('Internamento')->notNull();
			$table->bool('Ambulatorio')->notNull();
			$table->bool('Servicos')->notNull();
			$table->double('DespesasTotais')->notNull();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rel_despesas');
    }
};
