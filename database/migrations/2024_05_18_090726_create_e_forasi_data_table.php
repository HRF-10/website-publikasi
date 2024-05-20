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
        Schema::create('e_forasi_data', function (Blueprint $table) {
            $table->string('category');
            $table->string('pemohon');
            $table->text('aspirasi');
            $table->text('tanggapan');
            $table->string('narasumber');
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
        Schema::dropIfExists('e_forasi_data');
    }
};
