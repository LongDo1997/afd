<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name' => 'required',
            'phone' => 'required|regex:/(0)[0-9]{9}/|digits:10', 
            'email' => 'required|email',
            'subject' => 'required|min:1',
            'message' => 'required|min:1'
        ];  
    }
    public function messages(){
        return [
            'name.required' => 'Tên không được để trống!',
            'phone.required' => 'Số điện thoại không được để trống!',
            'phone.regex' => 'Số điện thoại không đúng định dạng!',
            'phone.digit' => 'Số điện thoại không đúng định dạng!',
            'email.required' => 'Số điện thoại không đúng định dạng!',
            'email.email' => 'Email không đúng định dạng!',
            'message.required' => 'Nội dung không được để trống!',
            'subject.required' => 'Tiêu đề không được để trống!',
        ];
    }
}
