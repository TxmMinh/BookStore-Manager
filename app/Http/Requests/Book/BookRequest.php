<?php

namespace App\Http\Requests\Book;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'extra_number' => 'required|min:150',
        ];
    }

    public function messages()
    {
        return [
            'extra_number.required' => 'Số lượng nhập ít nhất là 150!',
        ];
    }
}
