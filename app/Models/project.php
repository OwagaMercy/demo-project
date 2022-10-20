<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function readinessType()
    {
        return $this->belongsTo(ReadinessType::class);
    }

    public function countries()
    {
        return $this->hasMany(Country::class);
    }

    public function office()
    {
        return $this->belongsTo(Office::class);
    }
}
