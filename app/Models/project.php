<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class project extends Model
{
    use HasFactory;
    protected $fillable = [
        'id', 
        'title',
        'grant_amount',
        'date_GCF',
        'start_date', 
        'end_date', 
        'readiness_ref_id',
        'staus_ref_id',
        'office_ref_id'
    ];

    public function status() :BelongsTo {
        return $this->belongsTo(status::class, 'status_ref_id');
}


public function readiness() :BelongsTo {
    return $this->belongsTo(readiness::class, 'readiness_ref_id');
}

public function office() :BelongsTo {
    return $this->belongsTo(office::class, 'office_ref_id');
}


}
