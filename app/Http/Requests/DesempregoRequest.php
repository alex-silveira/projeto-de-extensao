<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DesempregoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'firstname' => 'required',
            'lastname' => 'required',
            'gender' => 'required',
            'birthdate' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'region' => 'required',
            'cep' => 'required',
            'education' => 'required',
            'familyincome' => 'required',
            'course' => 'required',
            
        ];
    }

    public function messages() 
    {
        return [
			'required' => 'Este campo é obrigatório!'
		];
    }
    
}
