<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbDadosPessoaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_dados_pessoais', function (Blueprint $table) {
                $table->bigIncrements('dp_id');
                $table->string('dp_nome');
                $table->string('dp_genero');
                $table->string('dp_categoria');
                $table->string('dp_morada');
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
        Schema::dropIfExists('tb_dados_pessoais');
    }
}
