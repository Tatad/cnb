<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->string('banner_video');
            $table->string('banner_title_logo');
            $table->string('banner_title');
            $table->string('philosophy_image');
            $table->text('philosophy_text');
            $table->string('philosophy_link_title');
            $table->text('our_team_top_text');
            $table->string('our_team_background_image');
            $table->string('our_team_title');
            $table->text('our_team_bottom_text');
            $table->string('gallery_small_text');
            $table->string('gallery_big_text');
            $table->json('galleries');
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
        Schema::dropIfExists('banners');
    }
}
