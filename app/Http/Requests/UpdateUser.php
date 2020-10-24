<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;

class UpdateUser extends FormRequest
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
            'name' => 'string|max:255',
            // 'email' => $this->header('Authorization') ? 'max:255|string|email|unique:users,email,' . $this->input('id') : '',
            'password' => 'confirmed|string|max:255',
            'image' => 'image|string|max:2048',
        ];
    }
}
