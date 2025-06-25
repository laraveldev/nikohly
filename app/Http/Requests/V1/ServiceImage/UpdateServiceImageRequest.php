<?php

namespace App\Http\Requests\V1\ServiceImage;

use Illuminate\Foundation\Http\FormRequest;

class UpdateServiceImageRequest extends FormRequest
{
    public function authorize(): bool { return true; }
    public function rules(): array
    {
        return [
            'image_url' => 'sometimes|required|string|max:255',
            'is_main' => 'boolean',
        ];
    }
}
