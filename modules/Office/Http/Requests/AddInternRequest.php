<?php

namespace Modules\Office\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddInternRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "first_name" => "required|string",
            "last_name" => "required|string",
            "contact_number" => "required|string",
            "email" => "required|email",
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
        //return $this->user()->check();
    }
}
