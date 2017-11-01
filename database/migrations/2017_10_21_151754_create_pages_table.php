<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('url')->unique();
            $table->text('welcome_text');
            $table->bigInteger('whatsapp')->nullable();
            $table->string('telegram')->nullable();
            $table->string('fbmessenger')->nullable();
            $table->bigInteger('viber')->nullable();
            $table->string('vk')->nullable();
            $table->string('ok')->nullable();
            $table->string('skype')->nullable();
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
        Schema::dropIfExists('pages');
    }
}
