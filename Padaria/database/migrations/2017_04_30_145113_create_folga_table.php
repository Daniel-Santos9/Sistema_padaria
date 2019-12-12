<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFolgaTable extends Migration
{

    public function up()
    {
        Schema::create('folga', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('turno',array('M','T','N'));
            $table->date('dia');
            $table->unsignedInteger('funcionario_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('folga');
    }
}
