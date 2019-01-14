<?php

namespace Exceptio\BangladeshGeoCode\Model;

use Illuminate\Database\Eloquent\Model;

class DivisionDistrict extends Model
{
    protected $table = "division_districts";
    protected $fillable = [
    	'id',
    	'division_id'
        'name',
        'bn_name',
        'lat',
        'lon',
        'website'
    ];

    public function division(){
    	return $this->belongsTo('Exceptio\BangladeshGeoCode\Model\Division');
    }

    public function upazilas(){
    	return $this->hasMany('Exceptio\BangladeshGeoCode\Model\DivisionDistrictUpazila');
    }
}
