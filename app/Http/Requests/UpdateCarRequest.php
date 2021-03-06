<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCarRequest extends FormRequest
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
            'brand' => 'string',
            'model' => 'string',
            'year' => 'integer',
            'maxSpeed' => 'integer|min:20|max:300',
            'isAutomatic' => 'boolean',
            'engine' => 'string',
            'numberOfDoors' => 'integer|min:2|max:5',
        ];
    }
}
