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
            $table->id();
            $table -> string("Azienda");
            $table -> string("Nome");
            $table -> string("Codice Treno");
            $table -> string("StazionediPartenza");
            $table -> string("StazioneDiArrivo");
            $table -> date("OrarioDiPartenza");
            $table -> date("OrarioDiArrivo");
            $table -> tinyInteger("NumCarrozze");
            $table -> boolean("VagoneNotte");
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
