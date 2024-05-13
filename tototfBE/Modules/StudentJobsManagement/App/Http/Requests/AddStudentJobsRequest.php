<?php

namespace Modules\StudentJobsManagement\App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddStudentJobsRequest extends FormRequest
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
            'heading' => 'required|string',
            'description' =>  'required|string',
            'subjects' =>  'array',
            'meetingtype' =>  'required|string',
            'paymenttype' =>  'required|string',
            'paymentrate' =>  'required|integer',
            'studentid' => 'integer'
        ];
    }
}
