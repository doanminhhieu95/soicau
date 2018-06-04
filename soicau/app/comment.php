<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    //
    Protected $table = "comments";
    protected $fillable = [
        'id',
        'content',
        'iduser'
    ];
    public function user(){
        return $this->belongsTo('App\User','iduser','id');
    }
}
