<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $guraded =[];

    public function jobType()
    {
        return $this->belongsTo(JobType::class, 'type_id');
    }
}
