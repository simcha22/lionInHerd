<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->uuid('user_id')->primary();
            $table->string('user_firstname',100);
            $table->string('user_email',100)->unique();
            $table->string('user_password',100);
            $table->boolean('approval');
            $table->timestamps();
        });
        Schema::table('users', function($table){
            $table->foreignUuid('role_id')->after('user_id')->nullable()->references('role_id')->on('roles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
