<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppliedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applied', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('job_id')->nullable();
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->integer('appliedstatus')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applied');
    }
}
