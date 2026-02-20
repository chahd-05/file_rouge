<?php

namespace App\Models;

use App\Models\Installation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Protection extends Model
{
    use HasFactory;

    protected $fillable = [
        'installation_id',
        'type',
        'currentRating',
        'curveType',
        'poles',
    ];

    public function installation()
    {
        return $this->belongsTo(Installation::class);
    }
}
