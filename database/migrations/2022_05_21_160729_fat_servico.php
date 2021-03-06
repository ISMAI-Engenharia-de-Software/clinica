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
        Schema::create('fat_servico', function (Blueprint $table) {
            $table->id();
            $table->date('data')->notNull();
            $table->double('valor')->notNull();
            $table->integer('paciente_nif')->unsigned()->notNull();
            $table->foreign('paciente_nif')->references('nif')->on('paciente')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fat_servico');
    }
};
