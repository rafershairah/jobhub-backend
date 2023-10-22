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
        'company_id'
    ];

    public function application(): HasMany{
        return $this ->hasMany(Application::class);
    }

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }
}