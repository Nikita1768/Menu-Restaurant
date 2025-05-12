<?php

namespace App\Http\Requests;

use App\Http\Requests\Admin\Dishes\BaseRequest;
use Illuminate\Foundation\Http\FormRequest;

class ChangeStatusRequest extends BaseRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'model' => 'required|string',
            'id' => 'required|integer',
        ];
    }
}
