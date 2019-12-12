<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFluxoDiarioTable extends Migration
{
    public function up()
    {
        Schema::create('fluxo_diario', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('cofre',8,2);
            $table->date('dia');
            $table->decimal('saldo',8,2);
            $table->decimal('cartao',8,2);
            $table->decimal('rendimento',8,2);
            $table->decimal('retirada_dia',8,2);
            $table->decimal('retirada_cofre',8,2);
            $table->decimal('total_vendas',8,2);
            $table->decimal('total_geral',8,2);
            $table->unsignedInteger('administrador_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('fluxo_diario');
    }
}
