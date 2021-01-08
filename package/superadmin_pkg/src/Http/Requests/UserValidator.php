<?php

namespace TeamBravo\SuperAdmin\Http\Requests;

Use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;



class UserValidator extends FormRequest
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
            'email' => 'required|email|unique:users',
            'phone'=>'required',
            'address'=>'required',
            'password'=>'required',
            'weight'=>'required',
            'salary'=>'required',
             'photo'=>'required',
             'cv'=>'required',
             'appoinment_letter'=>'required',
            'user_type'=>'required'
        ];
    }
    public function messages(){
        return[
            //'name.required'=>'SuperAdmin::validation.required',
            // 'name.required'=>'User Name is Required',
            // 'email.required'=>'Email Has To be Valid! & cannot be null!',
            // 'phone.required'=>'phone has to be 11 digits',
            // 'address.required'=>'Address has to be correct!',
            // 'password.required'=>'User Password cannot be null',
            // 'weight.required'=>'Insert a weight',
            // 'salary.required'=>'input a valid salary',
            // 'cv.required'=>'include cv',
            // 'appoinment_letter.required'=>'include appoinment letter',
            // 'photo.required'=>'include photo',
            // 'user_type.required'=>'Add a Role for the Company!',
        ];


    }

}
