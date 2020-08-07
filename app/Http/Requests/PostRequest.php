<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'title' => 'required|min:3|max:40',
            'description' => 'required|min:10|max:550',
            'img' => 'mimes:jpg,jpeg,png|max:5120',
        ];
    }
}
