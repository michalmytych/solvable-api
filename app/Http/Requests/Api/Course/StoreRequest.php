<?php

namespace App\Http\Requests\Api\Course;

use Illuminate\Foundation\Http\FormRequest;
use App\Traits\HasJsonFailedValidationResponse;

class StoreRequest extends FormRequest
{
    use HasJsonFailedValidationResponse;

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => 'string|unique',     // todo unique against other courses of this user
            'description' => 'string'
        ];
    }
}
