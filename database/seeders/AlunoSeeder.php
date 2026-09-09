<?php

namespace Database\Seeders;

use App\Models\Aluno;
use Illuminate\Database\Seeder;

class AlunoSeeder extends Seeder
{
    public function run(): void
    {
        $cursos = [
            'Análise e Desenvolvimento de Sistemas',
            'Ciência da Computação',
            'Engenharia de Software',
        ];

        $nomes = [
            'Ana Souza', 'Bruno Lima', 'Carla Mendes', 'Diego Alves',
            'Elaine Costa', 'Felipe Rocha', 'Gabriela Dias', 'Henrique Melo',
            'Isabela Nunes', 'João Pereira',
        ];

        foreach ($nomes as $i => $nome) {
            Aluno::create([
                'nome' => $nome,
                'email' => 'aluno' . ($i + 1) . '@exemplo.com',
                'curso' => $cursos[$i % count($cursos)],
                'data_nascimento' => now()->subYears(20 + $i)->format('Y-m-d'),
            ]);
        }
    }
}
