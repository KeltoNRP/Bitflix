<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMovie extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => ['required', 'min:2', 'max:50'],
            'description' => ['required', 'min:5', 'max:1000'], //teste dos 1000...
            'category' => ['required', 'min:2', 'max:200'],
            'actors' => ['required', 'min:2', 'max:200'],
        ];
    }
}
