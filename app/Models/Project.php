<?php

namespace App\Models;

use App\Models\Report;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'location', 
        'networkType',
    ];

    public function installation(){
        return $this->hasOne(installation::class);
    }

    public function reports(){
        return $this->hasMany(Report::class);
    }
}
