<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChequeTable extends Migration
{
    public function up()
    {
        Schema::create('cheque', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('numero');
            $table->unsignedInteger('pagamento_id');
            $table->unsignedInteger('movimentacao_bancaria_id')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cheque');
    }
}
