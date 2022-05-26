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
        Schema::create('ambulatorio', function (Blueprint $table) {
            $table->id();
            $table->date('data')->notNull();
            $table->string('procedimento')->notNull();
            $table->string('gastos')->notNull();
            $table->string('estado')->notNull();
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
        Schema::dropIfExists('ambulatorio');
    }
};
