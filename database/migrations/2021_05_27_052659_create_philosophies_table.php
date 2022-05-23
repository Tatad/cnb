<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhilosophiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('philosophies', function (Blueprint $table) {
            $table->id();
            $table->string('philosophy_banner_image');
            $table->text('philosophy_title');
            $table->text('philosophy_text');
            $table->text('philosophy_animated_text_title');
            $table->text('philosophy_animated_text');
            $table->string('info_with_image');
            $table->text('info_with_image_text');
            $table->text('text_without_image');
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
        Schema::dropIfExists('philosophies');
    }
}
