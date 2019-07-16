<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PatientStoreRequest extends FormRequest
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
            'analisis' => 'required',
            'scout' => 'required',
            'diagnostic' => 'required',
            'tratamiento' => 'required',
            'observations' => 'required',
        ];

        return $rules;
    }
}
