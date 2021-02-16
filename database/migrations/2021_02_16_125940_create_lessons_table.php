<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLessonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('title', 100);
            $table->string('slug', 100);
            //מזהה קטגוריות
            $table->integer('cet_one_id');
            $table->integer('cet_two_id');
            //מזהה רב מוסר השיעור
            $table->integer('rabbi_id');
            //שפת השיעור
            $table->string('language', 100);
            $table->text('information');
            //משך השיעור 
            $table->integer('duration');
            //קישורים לצפייה
            $table->string('image_url', 200);
            $table->string('audio_url', 200);
            $table->string('video_url', 200);
            //תאריך מסירת השיעור בעברית
            $table->string('date_time', 200);
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
        Schema::dropIfExists('lessons');
    }
}
