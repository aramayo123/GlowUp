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
        Schema::create('servicios_y_promociones', function (Blueprint $table) {
            $table->id(); 
            $table->bigInteger('id_servicio')->unsigned();
            $table->foreign('id_servicio')->references('id')->on('servicios')->onDelete('cascade');
            $table->bigInteger('id_promocion')->unsigned();
            $table->foreign('id_promocion')->references('id')->on('promociones')->onDelete('cascade');
            $table->boolean('active')->default(0);
            $table->boolean('already_modify')->default(0); 
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
        Schema::dropIfExists('servicios_y_promociones');
    }
};
