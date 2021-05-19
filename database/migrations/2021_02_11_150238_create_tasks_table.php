<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->integer('activity_id');
            $table->string('activity_name');
            $table->string('activity_acronym');
            $table->datetime('begin_time');
            $table->datetime('end_time');
            $table->datetime('begin_time_before');
            $table->datetime('end_time_late');
            $table->string('job_id');
            $table->string('job_type');
            $table->string('person_type');
            $table->integer('work_hour');
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
        Schema::dropIfExists('tasks');
    }
}
