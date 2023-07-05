<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AttributeValueRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => 'required|string|min:2',
            'value' => 'required|string|min:1',
            'attribute_id' => 'required|exists:attributes,id'
        ];
    }
}
