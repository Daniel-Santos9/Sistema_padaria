<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContaTable extends Migration
{
    public function up()
    {
        Schema::create('conta', function (Blueprint $table) {
            $table->increments('id');
            $table->string('banco');
            $table->string('agencia');
            $table->smallInteger('tipo');
            $table->string('numero');
            $table->decimal('saldo',8,2);
            $table->unsignedInteger('administrador_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('conta');
    }
}
