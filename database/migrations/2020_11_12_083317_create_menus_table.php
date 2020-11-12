<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('name', 100);
            $table->unsignedSmallInteger('tab_id');

            // define foreign references
            $table->foreign('tab_id')->references('id')->on('tabs')->constrained()->onDelete('cascade');

            // create indexes
            $table->index(['tab_id', 'name']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menus', function (Blueprint $table) {
            // drop foreign references
            $table->dropForeign(['tab_id']);

            // drop indexes
            $table->dropIndex(['tab_id', 'name']);
        });
    }
}
