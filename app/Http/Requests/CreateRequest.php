<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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
            'text' => 'required|max:255',
            'number' => 'required|integer'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => '※入力必須です',
            'text.required' => '※入力必須です',
            'number.integer' => '※数字で入力してください',
            'number.required' => '※入力必須です',
            'text.max'=> '※120文字以内で入力してください'
        ];
    }
}
