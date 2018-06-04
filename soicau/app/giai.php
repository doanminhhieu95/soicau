<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class giai extends Model
{
    //
    Protected $table = "giai";
    protected $fillable = [
        'id',
        'name'

    ];
    public function giaikqxs(){
        return $this->hasMany('App\giaikqxs','idgiai','id');
    }
}
