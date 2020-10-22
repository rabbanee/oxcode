<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SearchAttraction extends FormRequest
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
            'categories' => 'array',
            'hours_of_operation' => 'array',
            'longitude' => 'required_if:sort_by,distance',
            'latitude' => 'required_if:sort_by,distance',
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'hours_of_operation.array' => 'The :attribute field must be an object.',
        ];
    }
}
