<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AttributeRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => 'required|string|min:2'
        ];
    }
}
