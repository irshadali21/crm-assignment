<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends FormRequest
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
        $rules = [
            'name' => 'required|string|max:255',
            'logo' => 'image|mimes:jpeg,png,jpg,gif|dimensions:min_width ' . config('app.dimensions.min_width') . ',min_height=' . config('app.dimensions.min_height'),
        ];

        if ($this->isMethod('post')) {
            $rules['email'] = 'required|email|unique:companies|max:255';
        } elseif ($this->isMethod('put')) {
            $company = $this->route('company');
            $rules['email'] = 'required|email|unique:companies,email,' . $company->id . ',id|max:255';
        }

        return $rules;
    }
}
