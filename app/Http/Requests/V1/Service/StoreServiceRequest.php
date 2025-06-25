<?php

namespace App\Http\Requests\V1\Service;

use Illuminate\Foundation\Http\FormRequest;

class StoreServiceRequest extends FormRequest
{
    public function authorize(): bool { return true; }
    public function rules(): array
    {
        return [
            'vendor_id' => 'required|exists:vendors,id',
            'category_id' => 'required|exists:service_categories,id',
            'title' => 'required|string|max:255',
            'price_min' => 'required|numeric',
            'price_max' => 'required|numeric',
            'address' => 'required|string|max:255',
            'description' => 'nullable|string',
            'latitude' => 'nullable|numeric',
            'longitude' => 'nullable|numeric',
        ];
    }
}
