<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTopicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topics', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->boolean('is_deleted')->default(0);
        //    $table->bigInteger('account_id')->unsigned(); 
            $table->bigInteger('post_id')->unsigned();
            $table->timestamps();

        //   $table->foreign('account_id')->references('id')->
        //        on('accounts')->onDelete('cascade')->
        //        onUpdate('cascade');

            $table->foreign('post_id')->references('id')->
                on('posts')->onDelete('cascade')->
                onUpdate('cascade');    

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('topics');
    }
}
