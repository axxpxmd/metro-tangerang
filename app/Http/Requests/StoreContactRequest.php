<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreContactRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:20'],
            'subject' => ['required', 'string', 'in:redaksi,ads,partnership,feedback,other'],
            'message' => ['required', 'string', 'min:5'],
            'captcha' => [
                'required',
                'integer',
                function ($attribute, $value, $fail) {
                    if ((int) $value !== session('captcha_result')) {
                        $fail('Jawaban CAPTCHA salah. Silakan coba lagi.');
                    }
                },
            ],
        ];
    }
}
