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
            $table->dateTime('data_criacao')->notNull();
            $table->date('data_inicio')->notNull();
            $table->date('data_final')->notNull();
            $table->boolean('internamento')->notNull()->default(false);
			$table->boolean('ambulatorio')->notNull()->default(false);
			$table->boolean('servicos')->notNull()->default(false);
			$table->double('despesas_totais')->notNull()->default(0.0);
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
