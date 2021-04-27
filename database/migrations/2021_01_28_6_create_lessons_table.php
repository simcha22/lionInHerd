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
            $table->engine = 'InnoDB';
            $table->uuid('lesson_id')->primary();
            $table->string('lesson_name', 100);
            $table->string('lesson_title', 100);
            $table->string('lesson_slug', 100)->unique();
            $table->string('lesson_type', 100);

            //שפת השיעור
            $table->string('lesson_language', 100);
            $table->text('lesson_information');
            //תאריך מסירת השיעור בעברית
            $table->string('lesson_play_date', 200);
            //משך השיעור 
            $table->integer('lesson_duration');
            $table->integer('lesson_likes');
            //קישורים לצפייה
            $table->string('lesson_image_url', 200)->nullable();
            $table->string('lesson_audio_url', 200)->nullable();
            $table->string('lesson_video_url', 200)->nullable();
            
            $table->timestamps();
        });
        
        Schema::table('lessons', function($table){
            //קטגוריה ורב
            $table->foreignUuid('category_id')->after('lesson_id')->nullable()->references('category_id')->on('categories');
            $table->foreignUuid('rabbi_id')->after('category_id')->nullable()->references('rabbi_id')->on('rabbis');
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
        Schema::dropIfExists('lessons');
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
