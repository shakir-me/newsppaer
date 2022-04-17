<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->id();
            $table->string('link')->nullable();
            $table->string('type')->nullable();
            $table->string('image')->nullable();
            $table->string('ads_one')->nullable();
            $table->string('ads_two')->nullable();
            $table->string('ads_three')->nullable();
            $table->string('ads_four')->nullable();
            $table->string('ads_five')->nullable();
            $table->string('ads_six')->nullable();
            $table->string('ads_seven')->nullable();
            $table->string('ads_eight')->nullable();
            $table->string('ads_nine')->nullable();
            $table->string('ads_ten')->nullable();
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
        Schema::dropIfExists('ads');
    }
}
