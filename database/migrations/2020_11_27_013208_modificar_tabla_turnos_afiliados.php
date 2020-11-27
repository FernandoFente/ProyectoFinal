<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModificarTablaTurnosAfiliados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('turnos_afiliados', function (Blueprint $table) {
            $table->integer('afiliado_id');

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
        Schema::table('turnos_afiliados', function (Blueprint $table) {
            //
        });
    }
}
