<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransferencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transferences', function (Blueprint $table) {
            $table->id();
            $table->ipAddress('ip')->nullable();
            $table->biginteger('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreignId('metodo_id')->references('id')->onUpdate('cascade')->on('metodos');
            $table->integer('estado')->default(1);
            $table->biginteger('celular_id')->unsigned()->nullable();
            $table->foreign('celular_id')->references('id')->onUpdate('cascade')->on('celulars');
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
        Schema::dropIfExists('transferences');
    }
}
