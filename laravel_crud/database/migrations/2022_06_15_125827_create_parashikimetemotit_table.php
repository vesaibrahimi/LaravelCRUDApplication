<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('parashikimetemotit', function (Blueprint $table) {
            $table->id();
            $table->string("qytetiparashikuar_umpm");
            $table->string("temperatura_umpm");
            $table->string("lageshtia_umpm");

        });
    }


    public function down()
    {
        Schema::dropIfExists('parashikimetemotit');
    }
};
