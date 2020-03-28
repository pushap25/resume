<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGallerycontentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gallerycontent', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedinteger('parent_id');
            $table->foreign('parent_id')->references('id')->on('gallery');
            $table->string('images')->nullable();
            $table->string('videos')->nullable();
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
        Schema::dropIfExists('gallerycontent');
    }
}
