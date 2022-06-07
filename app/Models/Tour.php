<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Tour extends Model
{
    use HasFactory, Translatable;
    protected $translatable = ['title', 'text'];

    public function address()
    {
        return $this->belongsTo(Address::class);
    }
}
