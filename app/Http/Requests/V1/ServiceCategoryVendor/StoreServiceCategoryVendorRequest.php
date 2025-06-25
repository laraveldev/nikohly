<?php

namespace App\Http\Requests\V1\ServiceCategoryVendor;

use Illuminate\Foundation\Http\FormRequest;

class StoreServiceCategoryVendorRequest extends FormRequest
{
    public function authorize(): bool { return true; }
    public function rules(): array
    {
        return [
            'vendor_id' => 'required|exists:vendors,id',
            'category_id' => 'required|exists:service_categories,id',
        ];
    }
}
