<?php

namespace App\Models;

use App\Models\Installation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Panel extends Model
{
    use HasFactory;

    protected $fillable = [
        'installation_id',
        'brand',
        'model',
        'power',
        'vmp',
        'voc',
        'imp',
        'isc',
        'efficiency',
        'surface',
        'weight',
    ];

    public function installation(){
        return $this->belongsTo(Installation::class);
    }
}
