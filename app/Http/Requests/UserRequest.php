<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
    public function rules()
    {
        return [
            'name'              => 'required|min:3|max:99',
            'surname'           => 'required|min:2',
            'tckn'              => 'required|digits:11',
            'birthday'          => 'required',
            'education'         => 'required',
            'workplace'         => 'required',
            'mission'           => 'required',
            'phone'             => 'required|digits:10',
            'email'             => 'required|string|email|max:255|unique:users',
            'password'          => 'required|string|min:6',
            'onay'              => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required'            => 'İsim alanı giriniz',
            'name.max'                 => 'İsim alanı en fazla 99 karakter olabilir',
            'name.min'                 => 'İsim alanı en az 3 karakter olabilir',
            'surname.required'         => 'Soyisim alanı giriniz',
            'surname.min'              => 'Soyisim alanı en az 3 karakter olabilir',
            'tckn.required'            => 'TCKN alanı geçerli değil',
            'tckn.digits'              => 'TCKN 11 haneli olmalıdır',
            'birthday.required'        => 'Doğum tarihi alanı zorunludur',
            'education.required'       => 'Eğitim alanı zorunludur',
            'workplace.required'       => 'İşyeri alanı zorunludur',
            'mission.required'         => 'Görev alanı zorunludur',
            'phone.required'           => 'Telefon alanı zorunludur',
            'phone.digits'             => 'Telefon alanı geçerli değil',
            'email.required'           => 'E-posta alanı zorunludur',
            'email.email'              => 'E-posta adresi geçersiz',
            'email.max'                => 'E-posta adresi en fazla 255 karakter olabilir',
            'email.unique'             => 'Bu e-posta adresi zaten kullanılıyor',
            'password.required'        => 'Şifre alanı zorunludur',
            'password.min'             => 'Şifre en az 6 karakter olabilir',
            'onay.required'            => 'Onay alanı zorunludur'
            ];
    }
}
