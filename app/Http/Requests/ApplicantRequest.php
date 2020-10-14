<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApplicantRequest extends FormRequest
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
            'title' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'othername' => 'nullable',
            'gender' => 'required',
            'dob' => 'required',
            'marital_status' => 'required',
            'nationality' => 'required',
            'residential_address' => 'required',
            'email' => 'required|unique:applicants',
            'mobile_number' => 'required|unique:applicants|min:10|max:14',
            'ssnit_number' => 'required|unique:applicants',
            'ghanaian_lang_1' => 'required',
            'ghanaian_lang_2' => 'required',
            'ghanaian_lang_3' => 'nullable',
            'college_attended' => 'required',
            'college_location' => 'required',
            'college_from' => 'required',
            'college_to' => 'required',
            'college_certificate' => 'required|mimes:png,jpg,jpeg',
            'course_offered' => 'required',
            'staff_id' => 'required|unique:applicants|min:6|max:8',
            'registered_number' => 'required|unique:applicants|min:6|max:14',
            'region_1' => 'required',
            'region_2' => 'required',
            'region_3' => 'nullable'
        ];
    }
}
