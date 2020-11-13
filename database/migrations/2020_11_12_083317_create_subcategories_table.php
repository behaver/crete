<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubcategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subcategories', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('name', 100);
            $table->unsignedSmallInteger('category_id');

            // define foreign references
            $table->foreign('category_id')->references('id')->on('categories')->constrained()->onDelete('cascade');

            // create indexes
            $table->index(['category_id', 'name']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subcategories', function (Blueprint $table) {
            // drop foreign references
            $table->dropForeign(['category_id']);

            // drop indexes
            $table->dropIndex(['category_id', 'name']);
        });
    }
}
