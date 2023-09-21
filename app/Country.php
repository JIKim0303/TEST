<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'area_id'
    ];

    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    public function dogs()
    {
        return $this->hasMany(Dog::class);
    }
}
