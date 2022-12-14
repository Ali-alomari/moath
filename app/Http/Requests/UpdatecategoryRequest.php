<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatecategoryRequest extends FormRequest
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
            'nameAR'=>'required',
            'nameEN'=>'required'
        ];
    }
    public function Messages(){
        return [
            'nameAR.required'=>'The name in arabic required',
            'nameEN.required'=>'الاسم بالانجليزية مطلوب'
        ];
    }

}
