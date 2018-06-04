<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class day extends Model
{
    //
    Protected $table = "day";
    protected $fillable = [
        'id',
        'name'

    ];
    public function daycity(){
        return $this->hasMany('App\daycity','idday','id');
    }
}
