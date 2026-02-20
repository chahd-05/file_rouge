<?php

namespace App\Models;

use App\Models\Installation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cable extends Model
{
    use HasFactory;

    protected $fillable = [
        'installation_id',
        'type',
        'length',
        'current',
        'section',
        'voltageDrop',
    ];

    public function installation()
    {
        return $this->belongsTo(Installation::class);
    }
}
