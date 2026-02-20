<?php

namespace App\Models;

use App\Models\Installation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Structure extends Model
{
     use HasFactory;

    protected $fillable = [
        'installation_id',
        'type',
        'supportType',
        'totalWeight',
        'totalSurface',
        'numberOfRails',
        'numberOfBolts',
    ];

    public function installation()
    {
        return $this->belongsTo(Installation::class);
    }
}
