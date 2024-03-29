<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AssignementRequest extends FormRequest
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
            'titre' => 'required|string',
            'description' => 'required|string',
            'fichier' => 'sometimes|nullable|file',
            'role' => 'required|string',
            'deadline' => 'required|date',
            'module_id' => 'required|exists:modules,id',

        ];
    }
}
