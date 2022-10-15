<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Project extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            
                'id' => 'required',
                'title' => 'required',
                'grant_amount' => 'required',
                'date_GCF' => 'required',
                'start_date' => 'required',
                'end_date' => 'required',
                'readiness_ref_id' => 'required',
                'status_ref_id' => 'required',
                'office_ref_id' => 'required'
                
            
        ];
    }
}
