<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('company_name')->nullable();
            $table->string('company_email')->nullable();
            $table->string('job_title')->nullable();
            $table->string('location')->nullable();
            $table->string('qualification')->nullable();
            $table->string('passedout_year')->nullable();
            $table->string('skills')->nullable();
            $table->string('last_date')->nullable();
            $table->string('job_type')->nullable();
            $table->string('job_role')->nullable();
            $table->string('job_category')->nullable();
            $table->string('hiring_process')->nullable();
            $table->string('experience')->nullable();
            $table->string('job_description')->nullable();
            $table->string('website')->nullable();
            $table->bigInteger('user_id')->unsigned()->nullable();
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
        Schema::dropIfExists('jobs');
    }
}
