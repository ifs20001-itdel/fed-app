<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_pengabdian', function (Blueprint $table) {
            $table->id();
            $table->char('bagian_table', 4);
            $table->string('nama_kegiatan');
            $table->string('bukti_penugasan');
            $table->string('status');
            $table->integer('jumlah_kegiatan');
            $table->integer('beban_tugas');
            $table->string('capaian');
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
        Schema::dropIfExists('table_pengabdian');
    }
};
