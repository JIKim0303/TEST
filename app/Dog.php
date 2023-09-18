<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dog extends Model
{
    use HasFactory;

    public function area() {
        return $this->belongsTo(Area::class);
    }

    public function country() {
        return $this->belongsTo(Country::class);
    }

    protected $fillable = [
        'name',
        'area_id',
        'country_id',
        'file_name',
        'purpose',
        'color',
        'character',
        'history',
    ];
}
