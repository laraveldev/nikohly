<?php

namespace App\Http\Requests\V1\Service;

use Illuminate\Foundation\Http\FormRequest;

class UpdateServiceRequest extends FormRequest
{
    public function authorize(): bool { return true; }
    public function rules(): array
    {
        return [
            'vendor_id' => 'sometimes|required|exists:vendors,id',
            'category_id' => 'sometimes|required|exists:service_categories,id',
            'title' => 'sometimes|required|string|max:255',
            'price_min' => 'sometimes|required|numeric',
            'price_max' => 'sometimes|required|numeric',
            'address' => 'sometimes|required|string|max:255',
            'description' => 'nullable|string',
            'latitude' => 'nullable|numeric',
            'longitude' => 'nullable|numeric',
        ];
    }
}
