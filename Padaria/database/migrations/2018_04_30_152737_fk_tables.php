<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FkTables extends Migration
{

    public function up()
    {
        Schema::table('funcionario', function ($table) {
            $table->foreign('administrador_id')->references('id')->on('administrador')->onDelete('cascade');;
            $table->foreign('cargo_id')->references('id')->on('cargo')->onDelete('cascade');;
        });

        Schema::table('folga', function ($table) {
            $table->foreign('funcionario_id')->references('id')->on('funcionario')->onDelete('cascade');;
        });

        Schema::table('conta', function ($table) {
            $table->foreign('administrador_id')->references('id')->on('administrador')->onDelete('cascade');;
        });

        Schema::table('fluxo_diario', function ($table) {
            $table->foreign('administrador_id')->references('id')->on('administrador')->onDelete('cascade');;
        });

        Schema::table('pagamento', function ($table) {
            $table->foreign('administrador_id')->references('id')->on('administrador')->onDelete('cascade');;
        });

        Schema::table('boleto', function ($table) {
            $table->foreign('pagamento_id')->references('id')->on('pagamento')->onDelete('cascade');
            $table->foreign('movimentacao_bancaria_id')->references('id')->on('movimentacao_bancaria')->onDelete('cascade');;
        });

        Schema::table('cheque', function ($table) {
            $table->foreign('pagamento_id')->references('id')->on('pagamento')->onDelete('cascade');;
            $table->foreign('movimentacao_bancaria_id')->references('id')->on('movimentacao_bancaria')->onDelete('cascade');;
        });

        Schema::table('movimentacao_bancaria', function ($table) {
            $table->foreign('conta_id')->references('id')->on('conta')->onDelete('cascade');;
        });

        Schema::table('administrador', function ($table) {
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');;
        });
    }

    public function down()
    {
        //
    }
}
