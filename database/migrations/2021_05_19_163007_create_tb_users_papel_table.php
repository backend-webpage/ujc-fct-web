<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbUsersPapelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_users_papel', function (Blueprint $table) {
            $table->id();
            //pegar chave estrangerira de papel
            $table->unsignedBigInteger('pa_id_fk');
            $table->foreign('pa_id_fk')->references('pa_id')->on('tb_papel');

            //pegar chave estrangeira de users onde dp_id_fk e chave estrangeira na tabela users
            $table->unsignedBigInteger('dp_id_fk');
            $table->foreign('dp_id_fk')->references('dp_id_fk')->on('users');

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
        Schema::dropIfExists('tb_users_papel');
    }
}
