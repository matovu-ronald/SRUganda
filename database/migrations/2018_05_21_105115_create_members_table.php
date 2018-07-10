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
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('profession', 100)->nullable();
            $table->string('pic', 100)->nullable();
            $table->string('phone', 14)->nullable();
            $table->string('workstation')->nullable();
            $table->string('institute')->nullable();
            $table->string('gender', 100)->nullable();
            $table->text('files')->nullable();
            $table->text('about')->nullable();
            $table->boolean('confirmed')->nullable()->default(false);
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
        Schema::dropIfExists('members');
    }
}
