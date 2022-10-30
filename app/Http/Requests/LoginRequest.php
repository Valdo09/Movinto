<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Factory as ValidationFactory;
use Illuminate\Validation\Rule;

class LoginRequest extends FormRequest
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
            'identifiant' => 'required',
            'password' => 'required'
        ];
    }
    
    public function getCredentials()
     {
        
        $identifiant = $this->get('identifiant');

         if ($this->isEmail($identifiant)) {
            return [
                'email' => $identifiant,
                'password' => $this->get('password')
             ];
         }

         return $this->only('identifiant', 'password');
     }
     private function isEmail($param)
     {
         $factory = $this->container->make(ValidationFactory::class);

         return ! $factory->make(
            ['identifiant' => $param],
             ['identifiant' => 'email']
         )->fails();
     }
     public function failedValidation(Validator $validator) {
        throw new HttpResponseException(response()->json([
            'success' => false,
            'message' => 'The given data was invalid.',
            'errors' => $validator->errors()
        ], 422));
    }

}
