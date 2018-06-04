<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class loto extends Model
{
    //
    Protected $table = "loto";
    protected $fillable = [
        'id',
        'iduser',
        'ngaydanh',
        'number',
        'money',
        'jackpot',
        'image'
        
    ];
    public function user(){
        return $this->belongsTo('App\User','iduser','id');
    }
}
