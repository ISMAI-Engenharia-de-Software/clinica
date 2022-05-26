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
        Schema::create('fat_internamento', function (Blueprint $table) {
            $table->id();
            $table->date('Data')->notNull();
            $table->double('Valor')->notNull();
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
        Schema::dropIfExists('fat_internamento');
    }
};