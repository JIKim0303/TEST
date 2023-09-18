<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Country2 extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'area_name',
        'created_at',
        'updated_at'
    ];

    public function dogs()
    {
        return $this->hasMany(Dog::class);
    }
}
