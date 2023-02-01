<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table -> id();
            $table -> string("Azienda" , 50);
            $table -> string("Nome" , 100);
            $table -> string("CodiceTreno", 8)-> nullable(true);
            $table -> string("StazionediPartenza",50)-> nullable(true);
            $table -> string("StazioneDiArrivo",50)-> nullable(true);
            $table -> string("OrarioDiPartenza")-> nullable(true);
            $table -> string("OrarioDiArrivo")-> nullable(true);
            $table -> tinyInteger("NumCarrozze")-> nullable(true);
            $table -> tinyInteger("VagoneNotte") -> nullable(true);
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
        Schema::dropIfExists('trains');
    }
};
