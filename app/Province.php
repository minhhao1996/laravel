<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $table ="province";
    protected $fillable = [
        'id', 'name','type'
    ];
    public $timestamps= false;
    public function  province(){
        return $this->hasMany('App\District','id','province_id');
    }
}
