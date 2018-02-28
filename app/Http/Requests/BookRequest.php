<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
            'title'=>'required',
            'author'=>'required',
            'publisher'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'title.required'=>'Your title is not filled',
            'author.required'=>'Your author is not filled',
            'publisher.required'=>'Your Publisher is not avaible'
        ];
    }
}
