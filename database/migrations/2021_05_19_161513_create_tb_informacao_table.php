<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbInformacaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_informacao', function (Blueprint $table) {
            $table->bigIncrements('inf_id');
            $table->string('inf_titulo');
            $table->string('inf_descricao');

            //coluna para fk de dados pessoais
            $table->unsignedBigInteger('dp_id_fk');
            $table->foreign('dp_id_fk')->references('dp_id')->on('tb_dados_pessoais');

            //coluna para fk de categoria
            $table->unsignedBigInteger('cat_id_fk');
            $table->foreign('cat_id_fk')->references('cat_id')->on('tb_categoria');

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
        Schema::dropIfExists('tb_informacao');
    }
}
