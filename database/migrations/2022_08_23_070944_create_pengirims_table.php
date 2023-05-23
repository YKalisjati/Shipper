<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengirimsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengirims', static function (Blueprint $table) {
            $table->string('id');
            $table->string('id_user');
            $table->string('alamat_lengkap');
            $table->unsignedInteger('provinsi_id');
            $table->unsignedInteger('kabupaten_kota_id');
            $table->string('kode_pos');
            $table->string('catatan')->nullable();
            $table->timestamps();
            $table->primary('id');
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('provinsi_id')->references('province_id')->on('provinces');
            $table->foreign('kabupaten_kota_id')->references('city_id')->on('cities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengirims');
    }
}
