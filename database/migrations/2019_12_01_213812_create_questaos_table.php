<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questaos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('titulo');
            $table->string('descricao');
            $table->unsignedBigInteger('id_assunto')->nullable();
            $table->unsignedBigInteger('id_banca')->nullable();
            $table->unsignedBigInteger('id_orgao')->nullable();
            $table->softDeletes();

            $table->foreign('id_assunto')->references('id')->on('assuntos');
            $table->foreign('id_banca')->references('id')->on('bancas');
            $table->foreign('id_orgao')->references('id')->on('orgaos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questaos');
    }
}
