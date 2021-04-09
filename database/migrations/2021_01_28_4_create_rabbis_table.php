<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRabbisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rabbis', function (Blueprint $table) {
            $table->uuid('rabbi_id')->primary();
            $table->string('rabbi_name',100);
            $table->string('rabbi_title',100);
            $table->string('rabbi_slug',100);
            $table->string('rabbi_image_url',100);
            $table->text('rabbi_information');
            $table->timestamps();
        });
        
        Schema::table('rabbis', function($table){
            $table->foreignUuid('user_id')->after('rabbi_id')->nullable()->references('user_id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rabbis');
    }
}
