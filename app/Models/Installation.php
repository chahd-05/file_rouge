<?php

namespace App\Models;

use App\Models\Project;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Installation extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_id',
        'total_power',
        'number_of_panels',
        'number_of_string',
        'total_production',
        'system_loss',
    ];

    public function project(){
        return $this->belongsTo(Project::class);
    }
}
