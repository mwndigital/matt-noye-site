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
        Schema::create('hire_me_submissions', function (Blueprint $table) {
            $table->id();
            $table->string('type_of_business');
            $table->string('project_budget');
            $table->text('required_pages')->nullable();
            $table->string('designCreatedOrProvided');
            $table->text('websitesForInspiration')->nullable();
            $table->date('project_start_date')->nullable();
            $table->date('project_complete_date')->nullable();
            $table->text('other_details')->nullable();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email_address');
            $table->string('phone_number')->nullable();
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
        Schema::dropIfExists('hire_me_submissions');
    }
};
