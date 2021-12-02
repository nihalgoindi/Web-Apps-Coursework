<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('likes', function (Blueprint $table) {
            $table->id();
            $table->integer('is_liked');
            $table->bigInteger('post_id')->unsigned();
            $table->bigInteger('account_id')->unsigned();

            $table->foreign('post_id')->references('id')->
                on('posts')->onDelete('cascade')->
                onUpdate('cascade');

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
        Schema::dropIfExists('likes');
    }
}
