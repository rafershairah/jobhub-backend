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
            $table->string("description");
            $table->foreign("company_id")->references("id")->on("companies");
            $table->enum('job_types', ['part_time', 'full_time']);
            $table->dateTime('post_job');
            $table->integer('income');
            $table->enum('featured', ['featured', 'not_featured'])->default('not_featured');
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
