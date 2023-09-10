<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dog extends Model
{
    use HasFactory;

    public function area() {
        return $this->belongsTo('App\Models\Area');
    }

    public function country() {
        return $this->belongsTo('App\Models\Country');
    }

    protected $fillable = [
        'image',
        'name',
        'purpose',
        'color',
        'character',
        'history',
    ];
}
