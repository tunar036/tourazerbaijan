<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;
use TCG\Voyager\Traits\Translatable;

class Tour extends Model
{
    use HasFactory, Translatable,Resizable;
    protected $translatable = ['title', 'text'];
    public $with = ['translations', 'address'];

    public function address()
    {
        return $this->belongsTo(Address::class);
    }


    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }
}
