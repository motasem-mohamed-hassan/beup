<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('video')->nullable();

            $table->string('head_title_en')->nullable();
            $table->string('head_title_ar')->nullable();

            $table->text('head_description_en')->nullable();
            $table->text('head_description_ar')->nullable();

            $table->string('body_title_1_en')->nullable();
            $table->string('body_title_1_ar')->nullable();

            $table->text('body_description_1_en')->nullable();
            $table->text('body_description_1_ar')->nullable();

            $table->string('body_title_2_en')->nullable();
            $table->string('body_title_2_ar')->nullable();

            $table->text('body_description_2_en')->nullable();
            $table->text('body_description_2_ar')->nullable();

            $table->string('body_title_3_en')->nullable();
            $table->string('body_title_3_ar')->nullable();

            $table->text('body_description_3_en')->nullable();
            $table->text('body_description_3_ar')->nullable();

            $table->text('header_sec1_en')->nullable();
            $table->text('header_sec1_ar')->nullable();
            $table->text('header_sec2_en')->nullable();
            $table->text('header_sec2_ar')->nullable();

            $table->string('header_image')->nullable();
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
        Schema::dropIfExists('abouts');
    }
}
