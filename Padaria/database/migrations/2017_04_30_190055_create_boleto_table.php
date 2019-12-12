<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoletoTable extends Migration
{
    public function up()
    {
        Schema::create('boleto', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('NF');
            $table->unsignedInteger('pagamento_id');
            $table->unsignedInteger('movimentacao_bancaria_id')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('boleto');
    }
}
