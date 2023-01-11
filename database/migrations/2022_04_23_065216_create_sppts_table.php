<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sppts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('nop')->unique();
            $table->string('nama');
            $table->text('alamat_op');
            $table->text('alamat_wp');
            $table->integer('luas');
            $table->string('jenis_pajak');
            $table->string('pajak');
            $table->string('tahun');
            $table->string('keterangan');
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
        Schema::dropIfExists('sppts');
    }
}
