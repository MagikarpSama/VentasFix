<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateClientRequest extends FormRequest
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
            'rut_empresa' => 'required|string|unique:clients,rut_empresa,' . $this->client,
            'rubro' => 'required|string',
            'razon_social' => 'required|string',
            'telefono' => 'required|string',
            'direccion' => 'required|string',
            'nombre_contacto' => 'required|string',
            'email_contacto' => 'required|email',
        ];
    }
}
