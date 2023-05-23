<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', static function (Blueprint $table) {
            $table->unsignedInteger('province_id');
            $table->unsignedInteger('city_id');
            $table->string('city_name');
            $table->timestamps();

            $table->foreign('province_id')->references('province_id')->on('provinces');
            $table->primary('city_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cities');
    }
}
