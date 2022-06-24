<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class Address extends Model
{
    use HasFactory,Translatable;
    protected $table = 'addresses';
    protected $translatable = ['name','title'];
    public function tours()
    {
        return $this->hasMany(Tour::class,'address_id');
    }



    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }
}
