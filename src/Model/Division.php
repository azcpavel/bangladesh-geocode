<?php

namespace Exceptio\BangladeshGeoCode\Model;

use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    protected $table = "divisions";
    protected $fillable = [
    	'id',
        'name',
        'bn_name'
    ];

    public function districts(){
    	return $this->hasMany('Exceptio\BangladeshGeoCode\Model\DivisionDistrict');
    }
}
