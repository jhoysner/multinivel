<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSocialAccount extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_account', function (Blueprint $table) {
            $table->increments('id');
            $table->string('provider');
            $table->string('provider_id');
            $table->string('gender');
            $table->string('user_link')->nullable();
            $table->integer('user_id')->unsigned();
            $table->string('avatar')->nullable();
            $table->string('avatar_original')->nullable();
            $table->string('profile_url')->nullable();
            $table->string('token');
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
        Schema::dropIfExists('social_account');
    }
}
