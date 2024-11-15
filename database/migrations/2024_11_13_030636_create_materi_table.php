<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('materi', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->unsignedBigInteger('kategori_id');
            $table->text('overview');
            $table->unsignedBigInteger('user_id');
            $table->text('benefit');
            $table->text('description');
            $table->string('video')->nullable();
            $table->timestamps();
    
            // Foreign Key constraints
            $table->foreign('kategori_id')->references('id')->on('kategoris')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('materi');
    }
    
};
