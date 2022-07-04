<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormSiteRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name'                 => 'required|min:5|max:99',
            'email'                => 'required|email',
            'phone'                => 'required|digits:10',

        ];
    }

    public function messages()
    {
        return [
            'name.required'            => 'İsim Alanı Zorunludur.',
            'name.max'                 => 'İsim Alanı en fazla 99 karakter olabilir',
            'name.min'                 => 'İsim Alanı en az 5 karakter olabilir',
            'email.required'           => 'Email Alanı Zorunludur.',
            'email.email'              => 'Geçerli Bir Email girilmelidir.',
            'phone.required'           => 'Telefon Alanı Zorunludur',
            'phone.digits'             => 'Başında Sıfır Olmadan Giriniz Örn:5551234567',
        ];
    }
}
