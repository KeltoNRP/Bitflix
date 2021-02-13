<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreMovie extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $id = $this->segment(2);

        return [
            'title' => [
                'required', 
                'min:2', 
                'max:160', 
                Rule::unique('movies')=>ignore($id)
            ],
            'description' => [
                'required', 
                'min:5', 
                'max:1000'
            ], 
            'category' => [
                'required', 
                'min:2', 
                'max:200'
            ],
            'actors' => [
                'required', 
                'min:2', 
                'max:200'
            ],
        ];
    }
}
