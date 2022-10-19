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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('reference')-> unique();
            $table->string('name');
            $table->string('grant_amount');
            $table->string('date_gcf');
            $table->string('first_disbursement_amount');
            $table->string('readiness');
            $table->string('readiness_type_id');
            $table->string('office_id');
            $table->string('status_id');
            $table->string('start_date');
            $table->string('end_date');
            $table->string('duration');

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
        Schema::dropIfExists('projects');
    }
};
