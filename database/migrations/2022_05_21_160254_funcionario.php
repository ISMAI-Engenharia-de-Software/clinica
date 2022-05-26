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
        Schema::create('funcionario', function (Blueprint $table) {
            $table->integer('nif')->unsigned()->primary();
            $table->string('nome')->notNull();
            $table->integer('idade')->notNull();
            $table->string('email')->unique()->notNull();
            $table->integer('telemovel')->unique()->notNull();
            $table->string('especializacao')->notNull();
            $table->integer('departamento_id')->notNull();
            $table->foreign('departamento_id')->references('id')->on('departamento')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('funcionario');
    }
};
