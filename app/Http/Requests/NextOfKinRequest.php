<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NextOfKinRequest extends FormRequest
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
            'first_name' => ['string', 'required'],
            'last_name' => ['string', 'required'],
            'email' => ['string', 'required'],
            'phone_number' => ['string', 'required'],
            'relationship' => ['string', 'required']
        ];
    }
}
