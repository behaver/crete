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
            $table->unsignedSmallInteger('menu_id');
            $table->timestamps();

            // define foreign references
            $table->foreign('menu_id')->references('id')->on('menus')->constrained()->onDelete('cascade');

            // create indexes
            $table->index(['menu_id', 'name']);
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
            $table->dropForeign(['menu_id']);

            // drop indexes
            $table->dropIndex(['menu_id', 'name']);
        });
    }
}
