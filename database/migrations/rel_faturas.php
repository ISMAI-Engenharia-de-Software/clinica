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
        Schema::create('rel_faturas', function (Blueprint $table) {
            $table->id();
            $table->date('Data_Inicio')->notNull();
            $table->date('Data_Final')->notNull();
			$table->string('TipoFatura')->notNull();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rel_faturas');
    }
};
