<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TestimonialFormRequest extends FormRequest
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
            'name' =>[
                'required',
                'string'
            ],
            'job' =>[
                'required',
                'string'
            ],
            'review' =>[
                'required',
                'string'
            ],
            'image' =>[
                'nullable',
                'image',
                'mimes:jpg,jpeg,png'
            ],
            'status' =>[
                'nullable'
            ],
        ];
    }
}
