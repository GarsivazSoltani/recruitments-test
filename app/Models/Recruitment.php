<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recruitment extends Model
{
    use HasFactory;
    protected $guarded = [];
    
    public function conditions()
    {
        return $this->hasMany(Conditions::class);
    }
}
