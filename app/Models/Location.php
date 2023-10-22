<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Location extends Model
{
    use HasFactory;
    protected $fillable = [
        'Country',
        'City',
        'State/Province',
        'Zip Code'

    ];
    
    public function company(): HasMany{
        return $this ->hasMany(Company::class);
    }


}
