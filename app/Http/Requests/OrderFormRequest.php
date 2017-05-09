<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class OrderFormRequest extends Request
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


    public function after($validator)
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
            'address' => "required",
            'township' => "required",
            'ordernote' => "required",
        ];
    }
}
