<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kqxs extends Model
{
    //
    Protected $table = "kqxs";
    protected $fillable = [
        'id',
        'ngayxoso',
        'iddaycity'

    ];
    public function giaikqxs(){
        return $this->hasMany('App\giaikqxs','idgiaikqxs','id');
    }
    public function daycity(){
        return $this->belongsTo('App\daycity','iddaycity','id');
    }
}
