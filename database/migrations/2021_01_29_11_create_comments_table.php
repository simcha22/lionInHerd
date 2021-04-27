<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->uuid('comment_id')->primary();
            $table->string('commant_title');
            $table->timestamps();
        });
        Schema::table('comments', function($table){
            $table->foreignUuid('user_id')->after('comment_id')->nullable()->references('user_id')->on('users');
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
        Schema::dropIfExists('comments');
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
