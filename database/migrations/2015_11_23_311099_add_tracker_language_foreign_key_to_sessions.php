<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTrackerLanguageForeignKeyToSessions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function migrateUp()
    {
        $this->builder->table('tracker_sessions', function ($table) {
            $table->foreign('language_id')
                    ->references('id')
                    ->on('tracker_languages')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function migrateDown()
    {
        $this->builder->table('tracker_sessions', function ($table) {
            $table->dropForeign(['language_id']);
        });
    }
}
