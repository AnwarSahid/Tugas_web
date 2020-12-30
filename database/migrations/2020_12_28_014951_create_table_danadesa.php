<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableDanadesa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_danadesa', function (Blueprint $table) {
            $table->idds();
            $table->date('tanggal');
            $table->string('pemasukan');
            $table->string('sumber');
            $table->string('pengeluaran');
            $table->string('penggunaan');
            $table->string('total');
            $table->string('sisa');
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
        Schema::dropIfExists('table_danadesa');
    }
}
