<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HeroRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => 'required|min:2',
            'text' => 'required|min:5',
            'image' => 'nullable'
        ];
    }
}
