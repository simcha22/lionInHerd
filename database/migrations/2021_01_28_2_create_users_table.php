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
            $table->engine = 'InnoDB';
            $table->uuid('user_id')->primary();
            $table->string('user_firstname',100)->comment('שם פרטי');
            $table->string('user_lastname',100)->comment('שם משפחה');
            $table->string('user_email',100)->unique()->comment('כתובת מייל');
            $table->string('user_password',100)->comment('סיסמא');
            $table->boolean('approval')->nullable()->comment('מאשר לקבל עדכונים למייל');

            $table->integer('phone')->nullable()->comment('טלפון');
            $table->string('address',200)->nullable()->comment('כתובת');
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
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Schema::dropIfExists('users');
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
