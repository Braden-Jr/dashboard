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
        Schema::create('allprojects', function (Blueprint $table) {
            $table->id();
            $table->string('name_of_campaign');
            $table->string('team_leader');
            $table->string('total_number_of_positions');
            $table->string('number_of_personnel');
            $table->string('status');
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
        Schema::dropIfExists('allprojects');
    }
};
