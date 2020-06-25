<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBreedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('breed', function (Blueprint $table) {
            $table->increments('breed_id');
            $table->string('name');
            $table->unsignedInteger('specie_id');
            $table->foreign('specie_id')
                ->references('specie_id')
                ->on('specie');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('breed');
    }
}
