<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Category extends Model
{
    use HasFactory,Translatable;
    protected $translatable = ['name','title'];
    protected $with = ['tours'];

    public function tours()
    {
        return $this->hasMany(Tour::class,'address_id');
    }
}
