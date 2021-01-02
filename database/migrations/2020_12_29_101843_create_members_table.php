<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('full_name',128);
            $table->string('father_husband_name',128);
            $table->string('passport_number',128)->unique();
            $table->string('password');
            $table->string('current_country',64);
            $table->string('home_address',128);
            $table->string('category_of_work',128);
            $table->string('current_mobile_number',32);
            $table->string('country_mobile_number',32);
            $table->string('member_avatar');
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
        Schema::dropIfExists('members');
    }
}
