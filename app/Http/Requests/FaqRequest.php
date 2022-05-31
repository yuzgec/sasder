<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FaqRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title'                 => 'required|min:6|max:99|unique:events,title,'.$this->id,
            'category'              => 'required',
            'image'                 => 'image|max:2048|mimes:jpg,jpeg,png,gif',
            'gallery.*'             => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }

    public function messages()
    {
        return [
            'title.required'            => 'Etkinlik başlığını giriniz',
            'title.max'                 => 'Etkinlik başlığı en fazla 99 karakter olabilir',
            'title.min'                 => 'Etkinlik başlığı en fazla 6 karakter olabilir',
            'title.unique'              => 'Etkinlik başlığı daha önce eklenmiş',
            'category.required'         => 'Etkinlik Kategori seçimi zorunludur.',
            'image.max'                 => 'Etkinlik boyutu en yüksek 2048kb(2mb) olmalıdır',
            'image.mimes'               => 'Etkinlik formatı jpg,jpeg,png,gif olmalıdır',
            'image.image'               => 'Resim formatı uygun değildir.',

            'gallery.*.max'               => 'Resim boyutu en yüksek 2048kb(2mb) olmalıdır',
            'gallery.*.mimes'             => 'Resim formatı jpg,jpeg,png,gif olmalıdır',
            'gallery.*.image'             => 'Resim formatı uygun değildir.',

        ];
    }
}
