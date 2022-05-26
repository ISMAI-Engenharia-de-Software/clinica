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
            $table->int('data_inicio')->notNull();
            $table->date('data_final')->notNull();
            $table->bool('internamento')->notNull();
			$table->bool('ambulatorio')->notNull();
			$table->bool('servicos')->notNull();
			$table->double('despesas_totais')->notNull();
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
