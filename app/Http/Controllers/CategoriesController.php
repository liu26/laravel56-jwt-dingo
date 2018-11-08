<?php

namespace App\Http\Controllers;

use App\Http\Requests\CatvolRequests;
use App\Category;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;





class CategoriesController extends Controller
{
    public function show()
    {

        return view('cat');
        //$users  =DB::select('select * from categories');

        //新增分类信息
       //  $users=DB::insert("insert into categories values ('','3','3','vage','3','1','2018-10-24 10:53:21','2018-10-24 19:30:12')");

            //dump($users);
    }

    public function store(CatvolRequests $request)
    {
       // var_dump($request);die;
        //var_dump($input);die;
       //print_r($input);
        //Category::create();
       /* $shop_id=$_POST['shop_id'];
        $id=$_POST['id'];
        $modules=$_POST['modules'];
        $status=$_POST['status'];
        $create=$_POST['created_at'];
        $update=$_POST['updated_at'];
        $name=$_POST['name'];
        $order_by=$_POST['order_by'];*/
       /*$data = DB::insert("insert into categories values('$id','$shop_id','$modules','$name','$order_by','$status','$create','$update')");
        dump($data);*/
       //获取所有表单字段除了csrf中间件的token字段
        $input = $request->except(['_token']);

        //使用eloquent orm 进行新增方法
        $data = Category::create($input);

        dump($data);



    }


    public function queries(){

        //查询categories表中数据
        $data = \App\Category::get();
        //var_dump($data);

        foreach ($data as $key=>$val)
        {
            //echo $value->name."<br />"; categories表中name字段中的值
            echo 'id为'.$val->id.'对应的属性id是<br />';

            foreach ($val -> CateAttr as $k=>$v){

                //var_dump($val -> CateAttr);die;
                echo ' &nbsp;&nbsp;'.$val->id.'<br />';

            }


        }
    }

}
