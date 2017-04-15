<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('posts', function(Blueprint $table)
        {
            $table->increments('id');
            $table->bigInteger('post_author')->comment('作者');
            $table->dateTime('post_date')->comment('发表时间');
            $table->longText('post_content')->comment('内容');
            $table->string('post_title')->comment('标题');
            $table->text('post_excerpt')->comment('摘要');
            $table->boolean('comment_status')->comment('是否评论');
            $table->text('body')->nullable();

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
        //
    }
}
