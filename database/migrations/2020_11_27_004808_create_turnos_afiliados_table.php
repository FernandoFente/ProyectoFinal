<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTurnosAfiliadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turno_afiliados', function (Blueprint $table) {
            $table->id();            
            $table->date('turno');
            $table->string('departamento');
            $table->time('horario', 0);
            $table->unsignedBigInteger('doctor_id')->nullable();
            $table->unsignedBigInteger('afiliado_id')->nullable();
            $table->timestamps();

            $table->foreign('doctor_id')->references('id')->on('doctores');
            $table->foreign('afiliado_id')->references('id')->on('afiliados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('turnos_afiliados');
    }
}
