<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTeachers extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'email' => 'required|unique:teachers,email,'.$this->id,
            'password' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'Specialization_id' => 'required',
            'address' => 'required',
            'phone'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'email.required' => trans('validation.required'),
            'email.unique' => trans('validation.unique'),
            'password.required' => trans('validation.required'),
            'first_name.required' => trans('validation.required'),
            'last_name.required' => trans('validation.required'),
            'Specialization_id.required' => trans('validation.required'),
            'address.required' => trans('validation.required'),
            'phone.required' => trans('validation.required'),
        ];
    }
}
