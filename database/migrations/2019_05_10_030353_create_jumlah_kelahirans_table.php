<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJumlahKelahiransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jumlahKelahirans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Kelompok Umur');
            $table->integer('Anak Lahir Hidup 0');
            $table->integer('Anak Lahir Hidup 1');
            $table->integer('Anak Lahir Hidup 2');
            $table->integer('Anak Lahir Hidup 3');
            $table->integer('Anak Lahir Hidup 4');
            $table->integer('Anak Lahir Hidup 5');
            $table->integer('Anak Lahir Hidup 6');
            $table->integer('Anak Lahir Hidup 7');
            $table->integer('Anak Lahir Hidup 8');
            $table->integer('Anak Lahir Hidup 9');
            $table->integer('Anak Lahir Hidup 10+');
            $table->string('Kabupaten');
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
        Schema::dropIfExists('jumlahKelahirans');
    }
}
