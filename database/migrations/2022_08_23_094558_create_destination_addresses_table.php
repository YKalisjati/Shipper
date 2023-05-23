<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDestinationAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destination_addresses', static function (Blueprint $table) {
            $table->string('id');
            $table->string('user_id');
            $table->string('nama_penerima', 50);
            $table->string('nohp_penerima');
            $table->string('nama_alamat');
            $table->string('alamat_lengkap');
            $table->unsignedInteger('provinsi_id');
            $table->unsignedInteger('kabupaten_kota_id');
            $table->integer('kodepos');
            $table->string('note')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('provinsi_id')->references('province_id')->on('provinces');
            $table->foreign('kabupaten_kota_id')->references('city_id')->on('cities');
            $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('destination_addresses');
    }
}
