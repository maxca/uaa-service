<?php

namespace Samark\UAA\Request\Clients;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class UpdatePermissionRequest
 * @package Samark\UAA\Request\Clients
 * @author samark chaisanguan <samarkchsngn@gmail.com>
 */
class UpdatePermissionRequest extends FormRequest
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
        return [];
    }
}