<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovimentacaoBancariaTable extends Migration
{
    public function up()
    {
        Schema::create('movimentacao_bancaria', function (Blueprint $table) {
            $table->increments('id');
            $table->smallInteger('tipo');
            $table->date('data');
            $table->string('descricao');
            $table->decimal('valor',8,2);
            $table->unsignedInteger('conta_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('movimentacao_bancaria');
    }
}
