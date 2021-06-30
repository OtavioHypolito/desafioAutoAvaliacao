<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaminhaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caminhao', function (Blueprint $table) {
            $table->id();
            $table->string("tipoCaminhao", 100);
            $table->string("marcaCaminhao", 100);
            $table->string("modeloCaminhao", 100);
            $table->string("versaoCaminhao", 100);
            $table->string("dicaCaminhao", 100);
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
        Schema::dropIfExists('caminhao');
    }
}
