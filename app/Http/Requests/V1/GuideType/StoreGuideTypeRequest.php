<?php

namespace App\Http\Requests\V1\GuideType;

use Illuminate\Foundation\Http\FormRequest;

class StoreGuideTypeRequest extends FormRequest
{
    public function authorize(): bool { return true; }
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
        ];
    }
}
