<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class VendorAccountRequest extends Request
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
           
            'name'    => 'required|max:255',
            // 'email'   => 'required|email|max:255|unique:dealers',
            'company' => 'required|max:255',
            'city'    => 'required|max:255',
            'address' => 'required|max:255',
            'image_url' => 'max:5000|mimes:jpeg,bmp,png',
        ];
    }

    public function after($validator)
    {
        return true;
    }
}
