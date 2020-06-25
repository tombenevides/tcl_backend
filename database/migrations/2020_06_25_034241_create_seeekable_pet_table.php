<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeeekablePetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seeekable_pet', function (Blueprint $table) {
            $table->increments('seekable_pet_id');
            $table->unsignedInteger('pet_id');
            $table->foreign('pet_id')
                ->references('pet_id')
                ->on('pet');
            $table->double('latitude');
            $table->double('longitude');
            $table->char('type', 1); // F = found or L = lost
            $table->boolean('resolved')->default(false);
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
        Schema::dropIfExists('seeekable_pet');
    }
}
