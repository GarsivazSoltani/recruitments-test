<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;
    protected $guarded = [];
    // protected $casts = [
    //     'task' => 'array',
    //     'educations' => 'array',
    //     'skill' => 'array',
    //     'cours' => 'array',
    //     'personality' => 'array',
    //     'type' => 'array',
    // ];
    public function conditions()
    {
        return $this->hasMany(Conditions::class);
    }
}
