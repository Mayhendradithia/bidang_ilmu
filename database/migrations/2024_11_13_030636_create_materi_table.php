<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyVideoColumnInMaterisTable extends Migration
{
    public function up()
    {
        Schema::table('materis', function (Blueprint $table) {
            $table->string('video', 255)->required()->change(); // Mengubah kolom menjadi string
        });
    }

    public function down()
    {
        Schema::table('materis', function (Blueprint $table) {
            $table->text('video')->required()->change(); // Kembalikan ke tipe sebelumnya (opsional)
        });
    }
};
