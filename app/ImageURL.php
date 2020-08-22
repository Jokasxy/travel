<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImageUrl extends Model
{
    protected $fillable = [
        'imageURL', 'location_id',
    ];

    public function locations()
    {
        return $this->belongsTo('App\Location');
    }
}
