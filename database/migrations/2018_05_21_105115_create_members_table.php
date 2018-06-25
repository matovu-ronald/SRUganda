<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->integer('user_id')->unsigned()->nullable();
            $table->string('profession', 100)->nullable();
            $table->string('pic', 100)->nullable();
            $table->string('phone', 14)->nullable();
            $table->string('district')->nullable();
            $table->string('institute')->nullable();
            $table->string('gender', 100)->nullable();
            $table->text('files')->nullable();
            $table->text('about')->nullable();
            $table->boolean('confirmed')->nullable()->default(false);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
