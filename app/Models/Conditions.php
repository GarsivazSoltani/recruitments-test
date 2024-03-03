<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conditions extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $casts = [
        'capacity' => 'array'
    ];
    
    // function recruitments()
    // {
    //     return $this->belongsTo(Recruitment::class);
    // }

    function work()
    {
        return $this->belongsTo(Work::class);
    }
}
