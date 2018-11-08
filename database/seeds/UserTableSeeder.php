<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data= [
            [
                'id'  =>"1",
                'name'  =>"dd",
                'email'  =>"dd.com",
                'password' => bcrypt('123456'),
                'remember_token'  =>"ddtoken",
                'created_at' =>"2018-01-11 12:01:12",
                'updated_at' =>"2018-01-11 12:11:12"

            ],
            [   'id'  =>"2",
                'name'  =>"ee",
                'email'  =>"ee.com",
                'password' => bcrypt('123456'),
                'remember_token'  =>"eetoken",
                'created_at' =>"2018-01-11 14:01:12",
                'updated_at' =>"2018-01-11 14:11:12"
            ],
            [   'id'  =>"3",
                'name'  =>"ff",
                'email'  =>"ff.com",
                'password' => bcrypt('123456'),
                'remember_token'  =>"fftoken",
                'created_at' =>"2018-01-11 12:14:12",
                'updated_at' =>"2018-01-11 12:16:12"
            ],

        ];

        DB::table("user")->insert($data);
    }
}
