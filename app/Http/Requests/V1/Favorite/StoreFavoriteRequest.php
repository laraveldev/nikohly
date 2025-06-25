<?php

namespace App\Http\Requests\V1\Favorite;

use Illuminate\Foundation\Http\FormRequest;

class StoreFavoriteRequest extends FormRequest
{
    public function authorize(): bool { return true; }
    public function rules(): array
    {
        return [
            'user_id' => 'required|exists:users,id',
            'service_id' => 'required|exists:services,id',
        ];
    }
}
