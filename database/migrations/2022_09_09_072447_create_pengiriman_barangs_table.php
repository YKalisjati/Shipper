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
        Schema::create('pengiriman_barangs', static function (Blueprint $table) {
            $table->string('id');
            $table->string('id_paket');
            $table->string('id_pengirim');
            $table->string('id_penerima');
            $table->string('Agen')->nullable();
            $table->string('Jenis_Layanan')->nullable();
            $table->string('Biaya')->nullable();
            $table->string('Status');
            $table->timestamps();

            $table->primary('id');
            $table->foreign('id_paket')->references('id')->on('pakets');
            $table->foreign('id_penerima')->references('id')->on('penerimas');
            $table->foreign('id_pengirim')->references('id')->on('pengirims');
            $table->foreign('Status')->references('id_status')->on('shipping_statuses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengiriman_barangs');
    }
};
