<?php

namespace App\Http\Requests\Admin\Dishes;


class StoreDishRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'price' => ['required', 'numeric', 'min:0', 'max:299.99'],
            'image' => 'file|image',
            'category_id' => 'required|integer|exists:categories,id',
        ];
    }
}
