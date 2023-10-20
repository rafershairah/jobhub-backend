<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Application extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'job_id',
    ];

    public function application(): HasMany{
        return $this ->hasMany(Application::class);
    }
}
