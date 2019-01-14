<?php

namespace Exceptio\BangladeshGeoCode\Model;

use Illuminate\Database\Eloquent\Model;

class DivisionDistrictUpazila extends Model
{
    protected $table = "division_district_upazilas";
    protected $fillable = [
    	'id',
    	'district_id',
        'name',
        'bn_name'
    ];

    public function district(){
    	return $this->belongsTo('Exceptio\BangladeshGeoCode\Model\DivisionDistrict');
    }

}
