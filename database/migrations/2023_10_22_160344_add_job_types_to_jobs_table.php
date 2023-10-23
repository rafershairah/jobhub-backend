<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddJobTypesToJobsTable extends Migration
{
    public function up()
    {
        if (!Schema::hasColumn('jobs', 'job_types')) {
            Schema::table('jobs', function (Blueprint $table) {
                $table->enum('job_types', ['full_time', 'part_time'])->default('part_time');
            });
        }
    }

    public function down()
    {
        // Rollback logic if needed
    }
}
