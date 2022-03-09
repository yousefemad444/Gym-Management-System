<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCustomerRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|string|max:255|unique:customers,email,'.$this->id,
            'gender' => 'required|string|in:male,female',
            'mobile' => 'required|string|unique:customers,mobile,'.$this->id,
            'height' => 'required|integer|min:50|max:300',
            'weight' => 'required|numeric|min:20|max:500',
            'date_of_birth' => 'required|date',
        ];
    }
}
