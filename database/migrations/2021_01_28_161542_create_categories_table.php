<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name',100);
            $table->string('title',100);
            $table->string('slug',100);
            //איזה סוג קטגוריה אם ראשונה או שנייה
            $table->string('type_cat',100);
            //שיכות לשיעורים או לספרים
            //רק קטגוריות ראשונות
            $table->string('type',100);

            //שיוך לקטגוריות אחרות
            $table->integer('cet_id');
            $table->text('information');
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
        Schema::dropIfExists('categories');
    }
}
