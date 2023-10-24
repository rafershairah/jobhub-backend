<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ApplyForm extends Model
{
    use HasFactory;
    protected $fillable = [
        'Full Name',
        'Email',
        'Resume/CV'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function jobs(): BelongsTo
    {
        return $this->belongsTo(Job::class);
    }
}
