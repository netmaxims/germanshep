<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBreadImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bread_images', function (Blueprint $table) {
            $table->id();
            // $table->id('image_id');
            // $table->int('gallery_id');
            // $table->int('user_id');
            // $table->dateTime('viewtime');
            // $table->String('title');
            // $table->String('title_seo');
            // $table->String('description');
            // $table->String('tags');
            // $table->String('gallery_name');
            // $table->dateTime('date_recorded');
            // $table->dateTime('uploaded');
            // $table->String('image_size');
            // $table->String('allow_comments');
            // $table->String('allow_embedding');
            // $table->String('allow_rating');
            // $table->Int('rating_number_votes');
            // $table->Int('rating_total_points');
            // $table->Int('uploaded_rating');
            // $table->String('public_private');
            // $table->String('approved');
            // $table->int('number_of_views');
            // $table->String('featured');
            // $table->String('promoted');
            // $table->Int('flag_counter');
            // $table->String('media_location');
            // $table->String('media_quality');
            // $table->String('pd');
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
        Schema::dropIfExists('bread_images');
    }
}
