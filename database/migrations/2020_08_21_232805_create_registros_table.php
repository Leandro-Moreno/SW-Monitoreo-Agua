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
            $table->biginteger('region_id')->unsigned();
            $table->foreign('region_id')->references('id')->on('regions')->onUpdate('cascade')->onDelete('cascade');
            $table->biginteger('celular_id')->unsigned()->nullable();
            $table->foreign('celular_id')->references('id')->on('celulars');
            $table->integer('estado');
            $table->datetime('created_at');
            $table->datetime('updated_at');
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
