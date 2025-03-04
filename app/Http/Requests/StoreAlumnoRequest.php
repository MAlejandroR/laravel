<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAlumnoRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "nombre"=>"required|string|min:3|max:10",
            "dni"=>[
                "required",
                "string",
                "size:9",
                "unique:alumnos,dni",
                "regex:/^[0-9]{8}[A-Z]$/",
            ],
            "email"=>"required|email|unique:alumnos,email",

        ];
    }
}
