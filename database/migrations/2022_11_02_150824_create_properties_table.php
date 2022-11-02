<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->double('superficie');
            $table->string('intitule');
            $table->string('adresse');
            $table->integer('loyer');
            $table->string('status');
            $table->string('details');
            $table->string('image');
            $table->string('description');
            $table->boolean('isMeuble');
            $table->string('visite_virtuelle');
            $table->unsignedBigInteger('room_id')->nullable();
            $table->foreign('room_id')->references('id')->on('rooms');
            $table->unsignedBigInteger('land_id')->nullable();
            $table->foreign('land_id')->references('id')->on('lands');
            $table->unsignedBigInteger('home_id')->nullable();
            $table->foreign('home_id')->references('id')->on('homes');
            $table->unsignedBigInteger('type_id');
            $table->foreign('type_id')->references('id')->on('types');
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
        Schema::dropIfExists('properties');
    }
}


