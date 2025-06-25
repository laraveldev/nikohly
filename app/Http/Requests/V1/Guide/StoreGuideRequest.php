<?php

namespace App\Http\Requests\V1\Guide;

use Illuminate\Foundation\Http\FormRequest;

class StoreGuideRequest extends FormRequest
{
    public function authorize(): bool { return true; }
    public function rules(): array
    {
        return [
            'type_id' => 'required|exists:guide_types,id',
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'content' => 'required|string',
            'author' => 'required|string|max:255',
        ];
    }
}
