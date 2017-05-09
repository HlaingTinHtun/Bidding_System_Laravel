<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

abstract class Request extends FormRequest
{
     //
    public function authorize()
     {
         return true;
     }

     protected function getValidatorInstance()
     {
         return parent::getValidatorInstance()->after(function ($validator) {
             // Call the after method of the FormRequest (see below)
             $this->after($validator);
         });
     }
}
