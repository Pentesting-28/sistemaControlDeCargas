<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCargasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cargas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Orden')->unique();
            $table->string('Ret_ID')->unique();
            $table->string('Motivo')->unique();
            $table->string('Valor_Facial');
            $table->string('Desde');
            $table->string('Hasta');
            $table->text('Observacion');
            $table->date('Fecha');
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
        Schema::dropIfExists('cargas');
    }
}
