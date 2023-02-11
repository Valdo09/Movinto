<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\Rule;
class RegisterRequest extends FormRequest
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
            'email' => 'required|unique:users,email',
            'last_name' => 'required|max:255',
            'first_name'=> 'required|max:255',
            'phone_number'=> 'required|min:8',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password',
            'sex'=>'required',
            'role_id'=>'required'
            
        ];
    }
    public function failedValidation(Validator $validator) {
        throw new HttpResponseException(response()->json([
            'success' => false,
            'message' => 'The given data was invalid.',
            'errors' => $validator->errors()
        ], 422));
    }
}
