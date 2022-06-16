<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Slider extends Model
{
    use HasFactory,Translatable;
    protected $translatable = ['title','short_text','description'];


    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }

}
