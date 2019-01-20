<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MakerModel extends Model
{
    protected $table ="makers";
    protected $fillable = [
        'id', 'name', 'code','keyword', 'created_at','status',
    ];
    public $timestamps= false;

    public function  product(){
        return $this->hasMany('App\Product','maker_id','id');
    }
}
