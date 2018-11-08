<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diction extends Model
{   //自定义表名
    protected $table='dictionaries';

    public function dic(){

        return $this->belongsTo('App\Category','type','modules');
    }




}
