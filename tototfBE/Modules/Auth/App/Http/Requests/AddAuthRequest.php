<?php

namespace Modules\Auth\App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Symfony\Contracts\Service\Attribute\Required;

class AddAuthRequest extends FormRequest{
     /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(){
        return true;
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(){
        return[
            'name' => 'required|string',
            'location' => 'nullable|string',
            'phonenumber' => 'nullable|integer',
            'education' => 'nullable|string',
            'experience' => 'nullable|string',
            'email' => 'required|email:rfc|unique:users,email',
            'password' => 'required|confirmed',
            'usertype' => 'required|string',
            // "type" => ['required',Rule::unique('supplier_type')->whereNull("deleted_at")],
        ];
    }
}
