<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    protected $table ="categorys";
    protected $fillable = [
        'id', 'parent_id', 'name','icon','local', 'created_at','updated_at','status',
    ];
    public $timestamps= false;

    public function  product(){
        return $this->hasMany('App\Product','cat_id','id');
    }
}
