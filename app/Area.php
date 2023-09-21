<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
    ];

    public function dogs()
    {
        return $this->hasMany(Dog::class);
    }

    public function countries()
    {
        return $this->hasMany(Country::class);
    }
}
