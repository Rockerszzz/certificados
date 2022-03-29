<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDominiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dominios', function (Blueprint $table) {
            $table->id();
            $table->text('dominio');
            $table->text('servidor');
            $table->string('ssl');
            $table->text('tipo');
            $table->string('automatico');
            $table->text('periodo');
            $table->dateTime('expiracao');
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
        Schema::dropIfExists('dominios');
    }
}
