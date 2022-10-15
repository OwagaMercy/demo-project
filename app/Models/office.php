<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class office extends Model
{
    use HasFactory;
    protected $fillable = [
        'id', 
        'title',
        'country_ref_id'
    ];
    public function country() :BelongsTo {
        return $this->belongsTo(Country::class, 'country_ref_id');
}

}