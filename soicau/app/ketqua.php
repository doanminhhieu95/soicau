<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ketqua extends Model
{
    //
    Protected $table = "ketqua";
    protected $fillable = [
        'id',
        'ketqua',
        'idgiaikqxs'

    ];
    public function giaikqxs(){
        return $this->belongsTo('App\giaikqxs','idgiaikqxs','id');
    }
}
