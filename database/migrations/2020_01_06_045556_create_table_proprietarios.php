<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableProprietarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proprietarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('fantasy_name');
            $table->string('cel');
            $table->enum('forma_pag', ['Depósito em cheque', 'Depósito em dinheiro', 'Retirar cheque no local', 'Retirar dinheiro no local', 'Transf.bancária', 'Doc/Ted']);
            $table->string('rg');
            $table->boolean('flag');
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
        Schema::dropIfExists('proprietarios');
    }
}
