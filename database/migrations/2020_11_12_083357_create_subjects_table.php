<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->set('type', ['scope', 'text', 'picture', 'video', 'other']);
            $table->foreignId('scope_id');
            $table->foreignId('section_id')->constrained('sections')->onDelete('cascade');
            $table->timestamps();

            // create indexes
            $table->index(['scope_id']);
            $table->index(['section_id', 'scope_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subjects', function (Blueprint $table) {
            // drop foreign references
            $table->dropForeign(['scope_id']);
            $table->dropForeign(['section_id']);

            // drop indexess
            $table->dropIndex(['scope_id']);
            $table->dropIndex(['section_id', 'scope_id']);
        });
    }
}
