<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('sslc_school');
            $table->string('sslc_place');
            $table->string('sslc_percentage/cgpa');
            $table->year('sslc_year');
            $table->string('hsc_school');
            $table->string('hsc_place');
            $table->string('hsc_percentage/cgpa');
            $table->year('hsc_year');
            $table->string('ug_college');
            $table->string('ug_place');
            $table->string('ug_percentage/cgpa');
            $table->year('ug_year');
            $table->string('pg_college');
            $table->string('pg_place');
            $table->string('pg_percentage/cgpa');
            $table->year('pg_year');
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
        Schema::dropIfExists('education');
    }
}
