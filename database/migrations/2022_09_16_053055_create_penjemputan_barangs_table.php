<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjemputan_barangs', static function (Blueprint $table) {
            $table->string('id');
            $table->string('id_pesanan');
            $table->string('tanggal_penjemputan');
            $table->string('waktu_penjemputan');
            $table->string('agen_penjemputan')->nullable();
            $table->boolean('sudah_diterima_agen')->default(0);
            $table->string('tanggal_diterima_agen')->nullable();
            $table->string('waktu_diterima_agen')->nullable();
            $table->boolean('sudah_diterima_warehouse')->default(0);
            $table->string('tanggal_diterima_warehouse')->nullable();
            $table->string('waktu_diterima_warehouse')->nullable();
            $table->string('catatan')->nullable();
            $table->timestamps();

            $table->primary('id');
            $table->foreign('id_pesanan')->references('id')->on('pengiriman_barangs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penjemputan_barangs');
    }
};
