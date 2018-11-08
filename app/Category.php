<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    //关联到模型的数据表,自定义表名
    protected $table = "categories";

    //自定义取消时间戳
    public $timestamps=false;

    //所有字段属性设置为可以赋值
    protected $guarded = [];


    //定义一对多的关系
    public function CateAttr(){

        return $this->hasMany('App\CateAttr','category_id','id');
    }


}
