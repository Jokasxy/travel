<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImageURL extends Model
{
    protected $fillable = [
        'imageURL', 'location_id',
    ];

    public function locations()
    {
        return $this->belongsTo('App\Location');
    }
}
