<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKaryawansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karyawans', function (Blueprint $table) { 
            $table->id();
            $table->string('nama');
            $table->bigInteger('jabatan_id')->unsigned();
            $table->char('no_telepon');
            $table->bigInteger('pendidikan_id')->unsigned();
            $table->string('jenis_kelamin');
            $table->bigInteger('status_id')->unsigned();
            $table->integer('umur');
            $table->date('tanggal_masuk');
            $table->timestamps();

            $table->foreign('jabatan_id')->references('id')->on('jabatans')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('pendidikan_id')->references('id')->on('pendidikans')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('status_id')->references('id')->on('statuses')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('karyawans');
    }
}
