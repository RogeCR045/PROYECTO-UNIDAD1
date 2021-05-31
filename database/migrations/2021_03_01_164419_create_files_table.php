<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->id();
            $table->string('img_file', 255);    //en carpeta imagen
            $table->string('audio_file', 255);  //en carpeta audios
            $table->string('video_file', 255);  //en carpeta videos
            $table->string('pdf_file', 255);    //en carpeta pdfs
            $table->string('office_file', 255); //en carpeta docs
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
        Schema::dropIfExists('files');
    }
}
