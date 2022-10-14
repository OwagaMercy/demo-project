<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
