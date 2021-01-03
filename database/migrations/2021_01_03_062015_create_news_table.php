<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('news_headline');
            $table->text('short_desc')->nullable();
            $table->longText('news_details')->nullable();
            $table->string('news_link')->nullable();
            $table->unsignedBigInteger('publisher_id')->index();
            $table->string('published_date')->nullable();
            $table->string('status',20)->default('disabled');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
}
