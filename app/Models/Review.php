<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function tour()
    {
        return $this->belongsTo(Tour::class);
    }
    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }
}
