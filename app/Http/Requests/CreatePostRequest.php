<?php

namespace App\Http\Requests;

use App\Rules\Uppercase;
use Illuminate\Foundation\Http\FormRequest;

class CreatePostRequest extends FormRequest
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
    {//new Uppercase()
        return [
            'title'=>['required','max:50'],
            'description'=>'required',
            'file'=>['required','max:1000','mimes:jpeg,png,jpg']
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'لطفا عنوان مطلب موردنظر خود را وارد کنید',
            'title.max' => 'تعداد کاراکترهای عنوان شما باید کمتر از 50 کاراکتر باشد',
            'description.required' => 'لطفا عنوان مطلب موردنظر خود را وارد کنید',
            'file.required'=>'لطفا تصویر اصلی این مطلب رامشخض فرمائید',
            'file.max'=>'حداکثر سایز عکس 1000 کبلوبایت می باشد',
            'file.mimes'=> 'نوع تصویر مطلب باید jpeg یا jpg و یا png باشد'
        ];
    }
}
