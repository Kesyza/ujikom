<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soals', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('nama_mapel_id')->unsigned();
            $table->bigInteger('pilih_paket_id')->unsigned();
            $table->string('nama_soal');
            $table->text('soal');
            $table->string('opsi_A');
            $table->string('opsi_B');
            $table->string('opsi_C');
            $table->string('opsi_D');
            $table->text('jawaban');
            $table->text('keterangan');

            $table->foreign('nama_mapel_id')->references('id')
            ->on('mata_pelajarans')->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreign('pilih_paket_id')->references('id')
            ->on('paket_soals')->onUpdate('cascade')
            ->onDelete('cascade');

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
        Schema::dropIfExists('soals');
    }
}
