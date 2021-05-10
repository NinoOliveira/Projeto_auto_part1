<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carro', function (Blueprint $table) {
            $table->id();
			$table->String ("marca", 100);
			$table->String ("modelo", 100);
			$table->String ("placa", 100);
			$table->String ("cor", 100);
			$table->integer ("ano");
            $table->timestamps();
        });
    }
	
	//Carro: Marca, Modelo, Placa, Cor, Ano de Fabricação

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carro');
    }
}
