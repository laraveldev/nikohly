<?php

namespace App\Http\Requests\V1\ServiceCategory;

use Illuminate\Foundation\Http\FormRequest;

class UpdateServiceCategoryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        return [
            'name' => 'sometimes|required|string|max:255',
        ];
    }
}
