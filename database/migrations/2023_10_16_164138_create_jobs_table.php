<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("company_id");
            $table->string("title");
            $table->string("description", 1000);
            $table->foreign("company_id")->references("id")->on("companies");
            $table->enum('job_types', ['part_time', 'full_time']);
            $table->dateTime('job_date');
            $table->integer('income');
            $table->enum('job_featured', [1, 0])->default(0); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
