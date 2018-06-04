<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class daycity extends Model
{
    //
    Protected $table = "daycity";
    protected $fillable = [
        'id',
        'idday',
        'idcity'
    ];
    public function city(){
        return $this->belongsTo('App\city','idcity','id');
    }
    public function day(){
        return $this->belongsTo('App\loaide','idday','id');
    }
    public function kqxs(){
        return $this->hasMany('App\kqxs','iddaycity','id');
    }
}
