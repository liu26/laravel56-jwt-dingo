<?php

namespace App\Api\V1\Requests;

use Dingo\Api\Http\FormRequest;


class TestOneRequests extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        return [
                /* 'shop_id' => 'required|numeric',
                 'order_by'=>'required|numeric',
                 'status'  =>"required|numeric",
                 'name'  =>'required|between:2,20',*/

        ];
    }


    public function messages()
    {
        return [

           /* 'shop_id.required' => 'shop_id不能为空',
            'shop_id.numeric'=>'shop_id为数字',
            'order_by.required' => '排序不能为空',
            'order_by.numeric'=>'order_by为数字',
            'status.required' => 'status不能为空',
            'status.numeric'=>'status为数字',
            'name.required'  =>'name值不能为空',
            'name.between'=>'name字符长度在2和20之间',*/


        ];
    }
}


