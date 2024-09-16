<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('job_order', function (Blueprint $table) {
            $table->id();
            $table->string('job_number')->unique();
            $table->date('start_date');
            $table->date('end_date');
            $table->enum('status', ['Pending', 'In Progress', 'Completed']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('job_order');
    }
};
