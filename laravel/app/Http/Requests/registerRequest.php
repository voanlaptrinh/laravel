<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class registerRequest extends FormRequest
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
            'username' => "required|min:6|max:32",
            'email' => "required|email|min:6|max:32",
            'password' => 'required|min:6',
            'birthday' => "required",
            'name' => "required|min:6|max:32",
            'phone' => "required|min:10|max:10",
            'avatar' => "required",
            'role'=> "required",
            'status' =>"required",
        ];
        
    }
    public function messages(){
        return [
        
            'username.required' => "username bắt buộc nhập",
            'username.min' =>'username tối thiểu 6 kí tự',
            'username.max' => 'username tối đa 32 kí tự',
            'email.required' => "email bắt buộc nhập",
            'email.email' => 'email phải đúng định dạng',
            'email.min' =>'Email tối thiểu 6 kí tự',
            'email.max' => 'Email tối đa 32 kí tự',
            'password.required' => 'mật khẩu bắt buộc nhập',
            'password.min' => 'Mật khẩu tối thiểu 6 kí tự',
            'birthday.required' => "birthday bắt buộc nhập",
            'name.required' => "name bắt buộc nhập",
            'name.min' =>'name tối thiểu 6 kí tự',
            'name.max' => 'name tối đa 32 kí tự',
            'phone.required' => "phone bắt buộc nhập",
            'avatar.required' => "avatar bắt buộc nhập",
            'role.required' => "role bắt buộc nhập",
            'status.required' => "status bắt buộc nhập",

            
        ];
    }
}
