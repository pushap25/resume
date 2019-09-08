<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkexperienceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workexperience', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_name');
            $table->string('designation');
            $table->mediumText('title')->nullable();
            $table->longText('description')->nullable();
            $table->string('image');
            $table->date('from');
            $table->date('to')->nullable();
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
        Schema::dropIfExists('workexperience');
    }
}
