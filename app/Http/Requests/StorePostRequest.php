<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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

    public function rules()
    {
        return [
            'name' =>'required|max:10',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ];
    }
    public function messages(){
        return [
            'name.required' => "يرجي ادخال العنوان",
            'name.max' => "الرجاء ادخال اسم اقل من 10 ",
            'email.required' => "الرجاء ادخال ميل",
            'email.unique' => "هذا الايميل موجود في قاعدة البيانات بالفعل",
            'email.email' => "اخرك 10",
            'password.required' => "نسيت الباسورد",
        ];
    }
}
