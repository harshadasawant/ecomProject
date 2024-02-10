<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrackerPathsTable extends Migration
{
    /**
     * Table related to this migration.
     *
     * @var string
     */
    // private $table = 'tracker_paths';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tracker_paths', function (Blueprint $table) {
                $table->bigIncrements('id');

                $table->string('path')->index();

                $table->timestamps();
                $table->index('created_at');
                $table->index('updated_at');
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $this->drop($this->table);
    }
}
