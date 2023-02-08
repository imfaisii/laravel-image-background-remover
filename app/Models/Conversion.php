<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conversion extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'no_bg_image',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
