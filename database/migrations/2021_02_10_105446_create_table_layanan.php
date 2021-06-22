<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableLayanan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('layanan', function (Blueprint $table) {
            $table->id();
            $table->string('hostid');
            $table->string('host');
            $table->string('longitude');
            $table->string('latitude');
            $table->string('posisi');
            $table->string('ac')->nullable();
            $table->string('kondisiac')->nullable();
            $table->string('jumlahac')->nullable();
            $table->string('power');
            $table->string('backup')->nullable();
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
        Schema::dropIfExists('layanan');
    }
}
