<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventCategoryRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title'                 => 'required|min:6|max:99|unique:event_categories,title,'.$this->id,
        ];
    }

    public function messages()
    {
        return [
            'title.required'            => 'Etkinlik Kategori başlığını giriniz',
            'title.max'                 => 'Etkinlik Kategori başlığı en fazla 99 karakter olabilir',
            'title.min'                 => 'Etkinlik Kategori başlığı en fazla 6 karakter olabilir',
            'title.unique'              => 'Etkinlik Kategori başlığı daha önce eklenmiş',
        ];
    }
}
