<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Rent extends Model
{
    use HasFactory;

    protected $fillable = [
        'gel_bowl',
        'gel_flasche',
        'gel_glas',
        'gel_thermo_gr',
        'gel_thermo_kl',
        'gel_back_box',
        'zur_bowl',
        'zur_flasche',
        'zur_glas',
        'zur_thermo_gr',
        'zur_thermo_kl',
        'zur_back_box',
    ];

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }
}

