<?php

namespace Samark\UAA\Request\Users;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{

    /**
     * Determine if the user is authorized to make this request.
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     * @return array
     */
    public function rules()
    {
        return [
            'activated'        => 'required|boolean',
            'authorities'      => 'required|array',
            'createdBy'        => 'required|in:system,admin,backend',
            'createdDate'      => 'required',
            'email'            => 'required|email',
            'firstName'        => 'required',
            'imageUrl'         => 'required|nullable',
            'langKey'          => 'required|in:en,th',
            'lastModifiedBy'   => 'required|in:system,admin,backend',
            'lastModifiedDate' => 'required',
            'lastName'         => 'required',
            'login'            => 'required', // mobile login
            'mobile'           => 'required', // mobile number
            'password'         => 'required',

        ];
    }
}