<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->integer('category_id')->nullable();
            $table->integer('subcategory_id')->nullable();
            $table->text('short_desc')->nullable();
            $table->text('long_desc')->nullable();
            $table->integer('admin_id')->nullable();
            $table->string('slug')->nullable();
            $table->string('image')->nullable();
            $table->integer('division_id')->nullable();
            $table->integer('distric_id')->nullable();
            $table->integer('upzila_id')->nullable();
            $table->string('status')->nullable();
            $table->string('heding_news')->nullable();
            $table->string('first_section')->nullable();
            $table->string('second_section')->nullable();
            $table->string('three_section')->nullable();
            $table->string('four_section')->nullable();
            $table->string('five_section')->nullable();
            $table->string('view_count')->nullable();
            $table->string('seo_title')->nullable();
            $table->text('seo_desc')->nullable();
            $table->text('seo_key')->nullable();
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
        Schema::dropIfExists('posts');
    }
}
