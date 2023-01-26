<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreAbout extends FormRequest
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
            'image' => 'nullable',
            'title_ar' => 'required',
            'title_en' => 'required',
            'sub_title_ar' => 'required',
            'sub_title_en' => 'required',
            'hash_ar' => 'required',
            'hash_en' => 'required',
            'desc_ar' => 'required',
            'desc_en' => 'required',
        ];
    }
}
