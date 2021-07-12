<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('about_us_image')->default('about.jpg');
            $table->string('about_us_image_first')->default('about.jpg');
            $table->string('about_us_image_second')->default('about.jpg');
            $table->string('about_us_image_third')->default('about.jpg');
            $table->text('about_second');
            $table->text('about_description');
            $table->text('about_third');
            $table->string('contact_us_image')->default('contact.jpg');
            $table->text('contact_description');
            $table->string('video');
            $table->string('subs_title');
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
        Schema::dropIfExists('pages');
    }
}
