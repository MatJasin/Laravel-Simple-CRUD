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

    public function user()
    {
        return $this->belongsToMany(user::class, 'class', 'user_id', 'subject_id')->using(Classes::class);
    }
}
