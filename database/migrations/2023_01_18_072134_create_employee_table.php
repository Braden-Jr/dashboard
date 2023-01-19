<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee', function (Blueprint $table) {
            $table->id();
            $table->string('name')();
            $table->string('employee_number')(); 
            $table->string('hire_date')();
            $table->string('contact_number')();
            $table->string('birthdate')();
            $table->string('project_name')();
            $table->string('designation')(); 
            $table->string('tenure')(); 
            $table->string('total_it_exp')();
            $table->string('status')();
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
        Schema::dropIfExists('employee');
    }
};