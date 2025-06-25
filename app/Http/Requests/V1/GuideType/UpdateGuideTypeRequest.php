<?php

namespace App\Http\Requests\V1\GuideType;

use Illuminate\Foundation\Http\FormRequest;

class UpdateGuideTypeRequest extends FormRequest
{
    public function authorize(): bool { return true; }
    public function rules(): array
    {
        return [
            'name' => 'sometimes|required|string|max:255',
        ];
    }
}
