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
            $table->engine = 'InnoDB';
            $table->uuid('like_id')->primary();
            $table->string('like_type');
            $table->timestamps();
        });
        Schema::table('likes', function($table){
            $table->foreignUuid('user_id')->after('like_id')->nullable()->references('user_id')->on('users');
            $table->foreignUuid('lesson_id')->after('user_id')->nullable()->references('lesson_id')->on('lessons');
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
        Schema::dropIfExists('likes');
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
