<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
        switch($this->segment(3)){
            case 'add' :
                return[
                    'title'=>'required|max:255|min:2',
            'description'=>'required|max:300|',
            'title_seo'=>'required|max:150|min:2|unique:categories',
            'url'=>'required|max:255|min:10',
            'price'=>'required|digits_between:2,10',
            'category_id'=>'required',

                ];
                break;
                case'edit':
                    return[

                        
                            'title'=>'required|min:2|max:255',
                            'url'=>'required|max:255|min:10',
                            'title_seo'=>'required|max:150|min:5|unique:categories',
                        
                    ];
                    break;
        }
        
    }

    public function messages()
    {  
        return [
            
            'title.required' => '  عنوان اجباری است',
            'title.min'=>'عنوان کمتر از2 حرف است',
            'title.max'=>'عنوان بیشتر از 255 حرف است',
            'description.required' => '  توضیحات  اجباری است',
            'description.max'=>'توضیحات  بیشتر از 300 حرف است',
            'title_seo.required' => '  عنوان سئو اجباری است',
            'title_seo.min'=>'عنوان سئو کمتر از2 حرف است',
            'title_seo.max'=>'عنوان سئو بیشتر از 150 حرف است',
            'title_seo.unique'=>'عنوان سئو تکراری است',
            'url.required' => '  url اجباری است',
            'url.min'=>'url کمتر از 10 حرف است',
            'url.max'=>'url بیشتر از 255 حرف است',
            'price.required'=>'قیمت اجباری است',
            'price.digits_between'=>' قیمت باید بین 2 تا 10 رقم باشد' ,
            'category_id.required'=>'دسته بندی اجباری است',
            
        ];
    }
}
