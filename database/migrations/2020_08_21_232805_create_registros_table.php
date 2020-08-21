<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registros', function (Blueprint $table) {
            $table->id();
            $table->double('longitud');
            $table->double('latitud');
            $table->double('temperatura');
            $table->double('hg');
            $table->double('conduct');
            $table->double('od');
            $table->double('ph');
            $table->foreignId('region_id')->references('id')->on('regions');
            $table->foreignId('celular_id')->references('id')->on('celulars')->nullable();
            $table->integer('estado');
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
        Schema::dropIfExists('registros');
    }
}
