<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'firstName',
        'lastName',
        'year',
        'course'
    ];

    public function user() {
        return $this->belongsTo(user::class, 'user_id');
    }


    
}
