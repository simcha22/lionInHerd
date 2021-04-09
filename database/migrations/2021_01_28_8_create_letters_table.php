<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLettersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('letters', function (Blueprint $table) {
            $table->uuid('letter_id');
            $table->string('letter_sender');
            $table->string('letter_getting');
            $table->string('letter_title');
            $table->text('letter_information');
            $table->text('letter_answer');
            $table->timestamps();
        });
        Schema::table('letters', function($table){
            //שולח ורב מקבל או מנהל 
            $table->foreignUuid('user_id')->after('letter_id')->nullable()->references('user_id')->on('users');
            $table->foreignUuid('rabbi_id')->after('letter_getting')->nullable()->references('rabbi_id')->on('rabbis');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('letters');
    }
}
