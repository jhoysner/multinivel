<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCooperativeLevels extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cooperative_levels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('level_name');
            $table->decimal('tickeck_amount');
            $table->decimal('ticket_percent');
            $table->decimal('bussiness_amount');
            $table->decimal('bussiness_percent');
            $table->decimal('payout_amount');
            $table->decimal('payout_percent');
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
        Schema::dropIfExists('cooperative_levels');
    }
}
