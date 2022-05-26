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
        Schema::create('Funcionario', function (Blueprint $table) {
            $table->integer('NIF')->unsigned();
            $table->primary('NIF');
            $table->string('Nome')->notNull();
            $table->integer('Idade')->notNull();
            $table->string('Email')->unique()->notNull();
            $table->integer('Telemovel')->unique()->notNull();
            $table->string('Especializacao')->notNull();
            $table->foreignId('Departamento_ID')->notNull();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
