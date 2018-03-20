<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFootersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('footers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('alamat');
            $table->string('website');
            $table->string('email');
            $table->string('phone');
            $table->string('fax');
            $table->string('url_fb');
            $table->string('url_twitt');
            $table->string('url_ig');
            $table->string('url_web');
            $table->string('url_hashtag');
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
        Schema::drop('footers');
    }
}
