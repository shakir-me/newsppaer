<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideoPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('video_posts', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->integer('postcategory_id')->nullable();
            $table->text('short_desc')->nullable();
            $table->text('long_desc')->nullable();
            $table->integer('admin_id')->nullable();
            $table->string('slug')->nullable();
            $table->string('file')->nullable();
            $table->string('first_section')->nullable();
            $table->string('second_section')->nullable();
            $table->string('link')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('video_posts');
    }
}
