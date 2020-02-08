<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class contactUs extends FormRequest {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'name' => 'required|string',
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',
        ];
    }
    
    public function messages() {
        return [
            'name.required' => 'please type name ',
            'name.string' => 'please type name string',
//            'email' => 'required|email',
//            'subject' => 'required|string',
//            'message' => 'required|string',
        ];
    }

}
