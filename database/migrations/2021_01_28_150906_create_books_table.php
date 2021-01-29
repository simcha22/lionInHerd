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
            $table->id();
            $table->string('name',100);
            $table->string('title',100);
            $table->string('slug',100);
            $table->text('information');
            //מחיר
            $table->integer('price');
            //תמונה
            $table->string('img_url',100);
            //כמות
            $table->integer('quantity');
            //הוצאה
            $table->string('expense',100);
            //כרכים
            $table->string('volumes',100);
            //דירוג 
            $table->string('rating',100);
            //קטגוריה ורב
            $table->integer('cet_id');
            $table->integer('rabbi_id');
            //תאריך
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
        Schema::dropIfExists('books');
    }
}
