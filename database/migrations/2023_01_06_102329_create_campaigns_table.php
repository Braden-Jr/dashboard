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
        Schema::create('campaigns', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('employee_number')->nullable(); 
            $table->string('hire_date')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('birthdate')->nullable();
            $table->string('project_name')->nullable();
            $table->string('designation')->nullable(); 
            $table->string('tenure')->nullable(); 
            $table->string('total_it_exp')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('campaigns');
    }
};
