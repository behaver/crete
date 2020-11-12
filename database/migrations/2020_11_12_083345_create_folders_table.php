<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoldersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('folders', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->foreignId('parent_id')->constrained('folders')->onDelete('cascade');
            $table->foreignId('section_id')->constrained()->onDelete('cascade');
            $table->timestamps();


            // create indexes
            $table->index(['parent_id', 'name']);
            $table->index(['section_id', 'parent_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('folders', function (Blueprint $table) {
            // drop foreign references
            $table->dropForeign('folders_parent_id_foreign');
            $table->dropForeign(['section_id']);

            // drop indexes
            $table->dropIndex(['parent_id', 'name']);
            $table->dropIndex(['section_id', 'parent_id']);
        });
    }
}
