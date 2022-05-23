<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeUsers1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('surname')->after('name');
            $table->date('birth_date')->after('surname');
            $table->string('marital_status')->after('birth_date');
            $table->string('nationality')->after('marital_status');
            $table->string('address')->after('nationality');
            $table->string('tel_number')->after('address');
            $table->string('mobile')->after('tel_number');
            $table->string('membership')->after('mobile');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
