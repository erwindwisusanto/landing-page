<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
			return [
				'name' => 'required|string|min:3|max:100',
				'phone' => 'required|string|min:10|max:14',
				'clinic_name' => 'required|string|min:3|max:255',
				'clinic_address' => 'required|string|min:3|max:255',
				'operational_license_number' => 'required|string|min:3|max:100',
				'clinic_fasyankes_code' => 'required|string|min:3|max:30',
			];
    }
}
