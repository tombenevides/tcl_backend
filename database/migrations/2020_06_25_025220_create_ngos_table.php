<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNgosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ngo', function (Blueprint $table) {
            $table->increments('ngo_id');
            $table->string('name');
            $table->string('abbreviation');
            $table->text('description');
            $table->string('logo_image')->nullable();
            $table->double('latitude');
            $table->double('longitude');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')
                ->references('user_id')
                ->on('user');
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
        Schema::dropIfExists('ngo');
    }
}
