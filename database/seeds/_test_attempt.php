<?php

use Illuminate\Database\Seeder;

class _test_attempt extends Seeder
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
                'name'  =>"aa",
                'email'  =>"aa.com",
                'password' => bcrypt('123456'),
                'remember_token'  =>"aatoken",
                'created_at' =>date('Y-m-d H:i:s',time()),
                'updated_at' =>date('Y-m-d H:i:s',time())

            ],
            [   'id'  =>"2",
                'name'  =>"ee",
                'email'  =>"ee.com",
                'password' => bcrypt('123456'),
                'remember_token'  =>"eetoken",
                'created_at' =>date('Y-m-d H:i:s',time()),
                'updated_at' =>date('Y-m-d H:i:s',time())
            ],
            [   'id'  =>"3",
                'name'  =>"ff",
                'email'  =>"ff.com",
                'password' => bcrypt('123456'),
                'remember_token'  =>"fftoken",
                'created_at' =>date('Y-m-d H:i:s',time()),
                'updated_at' =>date('Y-m-d H:i:s',time())
            ],

        ];

        DB::table("_test_attempt")->insert($data);
    }

}
