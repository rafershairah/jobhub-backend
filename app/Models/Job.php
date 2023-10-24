<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Job extends Model
{
        use HasFactory;
        protected $fillable = [
            'title', 
            'description', 
            'company_id', 
            'job_types',
            'income', 
            'job_featured',
            'job_date',  

    ];

    public function application(): HasMany{
        return $this ->hasMany(Application::class);
    }

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }
    public function index()
{
    return "Hello from JobController@index";
}

    public function apply(): HasMany{
        return $this ->hasMany(ApplyForm::class);
    }


}