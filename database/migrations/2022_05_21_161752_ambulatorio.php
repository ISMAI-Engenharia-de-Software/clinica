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
            $table->date('Data')->notNull();
            $table->string('Procedimento')->notNull();
            $table->string('Gastos')->notNull();
            $table->string('Estado')->notNull();
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
        Schema::dropIfExists('ambulatorio');
    }
};
