<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PatientUpdateRequest extends FormRequest
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
        $rules = [
            'name' => 'required',
            'surname' => 'required',
            'birthday' => 'required',
            'blood' => 'required',
            'identification' => 'required|unique:patients,identification,'. $this->identification,
            'email' => 'required|unique:patients,email,'. $this->email,
            'telephone' => 'required',
            'address' => 'required',
        ];

        return $rules;
    }
}
