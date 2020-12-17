<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GunRequest extends FormRequest
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
            'gun_name' => 'required',
            'gun_type' => 'required',
            'caliber' => 'required',
            'company' => 'required'
        ];
    }

    public function messages()
    {
        return[
            'gun_name.required' => '槍枝名稱 必填',
            'gun_type.required' => '槍枝種類 必填',
            'caliber.required' => '口徑 必填',
            'company.required' => '公司名稱 必填'
        ];
    }
}
