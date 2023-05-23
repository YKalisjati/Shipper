<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenerimasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penerimas', static function (Blueprint $table) {
            $table->string('id');
            $table->string('nama_penerima', 50);
            $table->string('no_hp');
            $table->string('alamat_lengkap');
            $table->unsignedInteger('provinsi_id');
            $table->unsignedInteger('kabupaten_kota_id');
            $table->string('kode_pos');
            $table->string('catatan')->nullable();
            $table->timestamps();
            $table->primary('id');
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
        Schema::dropIfExists('penerimas');
    }
}
