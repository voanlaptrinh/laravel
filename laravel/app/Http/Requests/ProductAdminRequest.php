<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductAdminRequest extends FormRequest
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
        return [
            'nameProduct'=> "required|min:6|max:32",
            'price' =>"required|min:1",
            'status' => "required",
            'avatar' => "required",
            'describe' =>"required|min:30|max:255",
        ];
    }
    public function messages(){
        return [
           
            'nameProduct.required' => "name bắt buộc nhập",
            'nameProduct.min' =>'name tối thiểu 6 kí tự',
            'nameProduct.max' => 'name tối đa 32 kí tự',
            'avatar.required' => "avatar bắt buộc nhập",
            'status.required' => "status bắt buộc nhập",
            'price.required' =>"Price bắt buộc nhập",
            'describe.required' =>"describe Bắt buộc nhập",
            'describe.min' =>"Nhập tối thiểu 30 kí tự",
            'describe.max' =>"Nhập tối đa 255 kí tự",

            
        ];
    }
}
