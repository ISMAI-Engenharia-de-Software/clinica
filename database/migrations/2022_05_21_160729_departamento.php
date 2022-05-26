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
        Schema::create('Departamento', function (Blueprint $table) {
            $table->id();
            $table->string('Nome')->notNull()->unique();
            $table->string('AreaDepartamento')->unique()->notNull();
            $table->integer('NumTrabalhadores')->notNull();
            $table->string('Responsavel')->notNull();
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
