<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreacionTablaAfiliados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Afiliados', function (Blueprint $table) {
            $table->id();
            $table->string('apellido', 15);
            $table->integer('cuil')->notnull();
            $table->integer('edad');
            $table->string('plan', 10)->notnull();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Afiliados');
    }
}
