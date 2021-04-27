<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->uuid('book_id')->primary();
            $table->string('book_name',100);
            $table->string('book_title',100);
            $table->string('book_slug',100)->unique();
            $table->string('book_nicname',100);
            $table->text('book_information');
            //מחיר
            $table->float('book_price',8,2);
            //תמונה
            $table->string('book_image_url',100);
            //כמות
            $table->integer('book_quantity');
            //הוצאה
            $table->string('book_expense',100);
            //כרכים
            $table->string('book_volumes',100);
            //דירוג 
            $table->string('book_rating',100);
            //לייקים
            $table->integer('book_likes');
            //תאריך
            $table->string('book_production_data');
            $table->timestamps();
        });

        Schema::table('books', function($table){
            //קטגוריה ורב
            $table->foreignUuid('category_id')->after('book_id')->nullable()->references('category_id')->on('categories');
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
        Schema::dropIfExists('books');
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
