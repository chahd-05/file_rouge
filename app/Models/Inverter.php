<?php

namespace App\Models;

use App\Models\Installation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Inverter extends Model
{
     use HasFactory;

    protected $fillable = [
        'installation_id',
        'brand',
        'model',
        'maxVoltage',
        'mppptMin',
        'mpptMax',
        'maxCurrent',
        'powerAc',
        'phases',
    ];

    public function installation()
    {
        return $this->belongsTo(Installation::class);
    }
}
