<?php

namespace App\Http\Requests\Site;

use Illuminate\Foundation\Http\FormRequest;

class NewsFormRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        $array= [
            
            'email'=>'required|max:255|min:3',
            'name'=>'required|max:255|min:3',
        ];
        return $array;
    }
    public function messages()
    {  
        return [
            'email.required' => '  ایمیل وارد شود',
            'name.required' => '  نام و نام خانوادگی  پر شود است',
            
        ];
    }
}

