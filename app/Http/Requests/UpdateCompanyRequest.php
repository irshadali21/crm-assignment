<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCompanyRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $company = $this->route('company');
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:companies,email,' . $company->id . ',id|max:255',
            'logo' => 'image|mimes:jpeg,png,jpg,gif|dimensions:min_width=100,min_height=100',
        ];
    }
}
