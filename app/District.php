<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $table ="district";
    protected $fillable = [
        'id', 'name','type','province_id'
    ];
    public $timestamps= false;
    public function district()
    {
        return $this->belongsTo('App\Province');
    }
}
