<?php

namespace App\Http\Requests\V1\ServiceImage;

use Illuminate\Foundation\Http\FormRequest;

class StoreServiceImageRequest extends FormRequest
{
    public function authorize(): bool { return true; }
    public function rules(): array
    {
        return [
            'service_id' => 'required|exists:services,id',
            'image_url' => 'required|string|max:255',
            'is_main' => 'boolean',
        ];
    }
}
