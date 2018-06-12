<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');   //Primary key
            $table->string('name');     //TODO maybe be consistant and name the title of the company also name? or is that confusing with two names?
            $table->string('role');     //Role

            $table->integer('company_id')->unsigned()->index()->nullable();     //Link to company
            $table->foreign('company_id')->references('id')->on('companies');  //Link to company
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
