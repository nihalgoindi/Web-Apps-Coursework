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
            $table->title();
            $table->string('caption');
            $table->integer('number_of_likes')->nullable();
            $table->integer('number_of_comments')->nullable();
            $table->bigInteger('account_id')->unsigned();
            

            $table->foreign('account_id')->references('id')->
                on('accounts')->onDelete('cascade')->
                onUpdate('cascade');

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
