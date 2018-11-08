<?php

use Illuminate\Database\Seeder;

class CatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    //分类表填充数据
    public function run()
    {

        $data= [
            [
                  'shop_id'  =>"2",
                  'category_id'  =>"2",
                  'name'  =>"holo",
                  'name_value'  =>"value6",
                  'status'  =>"morl",

            ],
            [
                'shop_id'  =>"3",
                'category_id'  =>"4",
                'name'  =>"holo",
                'name_value'  =>"value7",
                'status'  =>"unmorl",

            ],


        ];

        //写入数据
        DB::table("categories")->insert($data);
    }
}
