<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class VendorItemRequest extends Request
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
            'name'      => 'required|max:255',
            'cat_id'    => 'required|not_in:-1',
            'descr'     => 'required',
            'hashtag'   => 'required|max:100',
            'price'     => 'required|numeric',
            'quantity'  => 'required|integer',
            'image_url' => 'required|max:5000|mimes:jpeg,bmp,png',
        ];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  
     * @return Response
     */
    public function after($validator)
    {
         // Check the file if there has list provider is contact.
        // if ($this->input('list_provider') == "contacts" && !$this->hasFile('emails')) {
        //   $validator->errors()->add('emails', 'The CSV file field is required!');
        // }
        
        // Perform additional validation for bodies
       // if (empty($this->input('body_plain')) && empty($this->input('body_html'))) {
       //     $validator->errors()->add('body_plain', 'The body plain or html field is required!');
       //  }
    
    }
}
