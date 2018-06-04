<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class giaikqxs extends Model
{
    //
    Protected $table = "giaikqxs";
    protected $fillable = [
        'id',
        'idkqxs',
        'idgiai'

    ];
    public function kqxs(){
        return $this->belongsTo('App\kqxs','idkqxs','id');
    }
    public function giai(){
        return $this->belongsTo('App\giai','idgiai','id');
    }
    public function ketqua(){
        return $this->hasMany('App\ketqua','idgiaikqxs','id');
    }
}
