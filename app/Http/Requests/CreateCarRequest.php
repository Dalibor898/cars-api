<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCarRequest extends FormRequest
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
            'brand' => 'required|string',
            'model' => 'required|string',
            'year' => 'required|integer',
            'maxSpeed' => 'required|integer|min:20|max:300',
            'isAutomatic' => 'required|boolean',
            'engine' => 'required|string',
            'numberOfDoors' => 'required|integer|min:2|max:5',
        ];
    }
}