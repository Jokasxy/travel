<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = [
        'name', 'country', 'description', 'latitude', 'longitude',
    ];

    public function imageurls()
    {
        return $this->hasMany('App\ImageURL');
    }
}
