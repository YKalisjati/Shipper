<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pakets', static function (Blueprint $table) {
            $table->string('id');
            $table->string('jenis_paket');
            $table->float('berat');
            $table->float('panjang');
            $table->float('lebar');
            $table->float('tinggi');
            $table->integer('nilai_barang')->nullable();
            $table->string('external_id')->nullable();
            $table->timestamps();
            $table->primary('id');
            $table->foreign('jenis_paket')->references('id_type')->on('package_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pakets');
    }
}
