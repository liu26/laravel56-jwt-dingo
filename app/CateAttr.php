<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CateAttr extends Model
{
    //自定义表名
    protected $table='categories_attr';
    //自定义取消时间戳
    public $timestamps=false;

}
