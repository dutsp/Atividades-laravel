<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AlunoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $alunoId = $this->route('aluno');

        return [
            'nome' => 'required|string|max:255',
            'email' => [
                'required',
                'email',
                Rule::unique('alunos', 'email')->ignore($alunoId),
            ],
            'curso' => 'required|string|max:255',
            'data_nascimento' => 'nullable|date|before:today',
        ];
    }

    public function messages(): array
    {
        return [
            'nome.required' => 'O nome do aluno é obrigatório.',
            'nome.max' => 'O nome do aluno pode ter no máximo 255 caracteres.',
            'email.required' => 'O e-mail é obrigatório.',
            'email.email' => 'Informe um e-mail válido.',
            'email.unique' => 'Já existe um aluno cadastrado com este e-mail.',
            'curso.required' => 'O curso é obrigatório.',
            'data_nascimento.date' => 'Informe uma data de nascimento válida.',
            'data_nascimento.before' => 'A data de nascimento deve ser anterior à data de hoje.',
        ];
    }
}
