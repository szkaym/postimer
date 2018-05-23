<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('job_name'. 255);
            $table->boolean('job_starting_flag')->default(0);
            $table->timestamp('job_last_start')->nullable();
            $table->timestamp('job_last_end')->nullable();
            $table->boolean('job_is_default')->nullable();
            $table->timestamps();

            $table->index(['user_id', 'job_starting_flag']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_jobs');
    }
}
