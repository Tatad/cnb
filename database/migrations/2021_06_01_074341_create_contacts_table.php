<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('contact_banner_image');
            $table->string('title');
            $table->string('send_request_title');
            $table->text('left_content_text_1');
            $table->text('left_content_text_2');
            $table->string('phone');
            $table->string('form_title');
            $table->string('map_image');
            $table->string('map_url');
            $table->string('social_media_title');
            $table->json('social_medias');
            $table->string('contacts_info_title');
            $table->string('contacts_info_phone');
            $table->string('contacts_info_address');
            $table->string('call_back_form_video');
            $table->string('call_back_form_image');
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
        Schema::dropIfExists('contacts');
    }
}
