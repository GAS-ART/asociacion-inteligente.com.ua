<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HelpRequest extends FormRequest
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
         'name' => 'required||min:2|max:80',
         'contact' => 'required',
        ];
    }

    public function messages(){
        return[
           'name.required' => "Не заполнено поле \"Имя\"",
           'name.min' => "Поле \"Имя\" должно содержать 2 или больше символов",
           'name.max' => "Поле \"Имя\" должно содержать не больше 80 символов",
           'contact.required' => "Не заполнено поле \"Контакты\"",
        ];
     }
}
