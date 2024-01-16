<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'kundenname',
        'hub',
        'straße',
        'plz',
        'ort',
        'kontakt',
        'telefon',
        'aktiv',
        'created_by'
    ];
    public function rents(): HasMany
    {
        return $this->hasMany(Rent::class, 'by_company_rents_id');
    }
}
