<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfessionFormRequest extends FormRequest
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
            'title' =>[
                'required',
                'string'
            ],
            'address' =>[
                'required',
                'string'
            ],
            'start_to' =>[
                'required',
                'string'
            ],
            'end_to' =>[
                'required',
                'string'
            ],
            'point1' =>[
                'required',
                'string'
            ],
            'point2' =>[
                'required',
                'string'
            ],
            'point3' =>[
                'required',
                'string'
            ],
            'point4' =>[
                'required',
                'string'
            ],
            'status' =>[
                'nullable'
            ],
        ];
    }
}
