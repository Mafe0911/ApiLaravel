<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveBookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'book_name' => 'required|string|max:255',
            'book_author' => 'required|string|max:255',
            'book_description' => 'required|string|max:1000',
            'category_id' => 'required|integer|exists:categoriespl,id',
            'book_image' => 'required|string|max:255',
        ];
    }
}
