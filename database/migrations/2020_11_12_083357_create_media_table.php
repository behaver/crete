<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->set('type', ['text', 'picture', 'video', 'other']);
            $table->foreignId('folder_id')->constrained('folders')->onDelete('cascade');
            $table->foreignId('section_id')->constrained('sections')->onDelete('cascade');
            $table->timestamps();

            // create indexes
            $table->index(['folder_id']);
            $table->index(['section_id', 'folder_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('media', function (Blueprint $table) {
            // drop foreign references
            $table->dropForeign(['folder_id']);
            $table->dropForeign(['section_id']);

            // drop indexess
            $table->dropIndex(['folder_id']);
            $table->dropIndex(['section_id', 'folder_id']);
        });
    }
}
