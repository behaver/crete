<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sections', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->unsignedSmallInteger('subcategory_id');
            $table->timestamps();

            // define foreign references
            $table->foreign('subcategory_id')->references('id')->on('subcategories')->constrained()->onDelete('cascade');

            // create indexes
            $table->index(['subcategory_id', 'name']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sections', function (Blueprint $table) {
            // drop foreign references
            $table->dropForeign(['subcategory_id']);

            // drop indexes
            $table->dropIndex(['subcategory_id', 'name']);
        });
    }
}
