<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagamentoTable extends Migration
{
    public function up()
    {
        Schema::create('pagamento', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descricao');
            $table->date('vencimento');
            $table->decimal('valor',8,2);
            $table->unsignedInteger('administrador_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pagamento');
    }
}
