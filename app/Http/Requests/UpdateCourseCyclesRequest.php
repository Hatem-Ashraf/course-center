<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCourseCyclesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'StartDate' => ['required', 'date'],
            'EndDate' => ['required', 'date', 'after:' . $this->input('StartDate')],
            'TeacherId' => ['required', 'exists:teachers,TeacherId'],
            'CycleDescription' => ['nullable', 'string']
        ];
    }
}
