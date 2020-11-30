<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
class NewsRequest extends FormRequest
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
            'paragraph' => 'required|min:15|max:70',
            'text' => 'required|max:1500',
        ];
    }

    public function messages(){
        return[
            'paragraph.required' => 'Поле параграф обязательно',
            'text.required' => 'Поле текст обязательно'
        ];
    }
}
