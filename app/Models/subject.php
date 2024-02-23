<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subject extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'subject',
        'lecturer',
        'description'
    ];

    public function users()
    {
        return $this->belongsToMany(user::class, 'enrollment', 'user_id', 'subject_id');
    }
}
