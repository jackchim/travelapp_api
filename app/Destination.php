<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    protected $fillable = [
        'title' , 'featured_image'
    ];

    public function places(){
        return $this->hasMany( Place::class );
    }
}
