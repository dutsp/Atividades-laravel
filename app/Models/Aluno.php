<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'email',
        'curso',
        'data_nascimento',
    ];

    public function scopeDoCurso($query, string $curso)
    {
        return $query->where('curso', $curso);
    }

    public function scopeNomeContendo($query, string $palavra)
    {
        return $query->where('nome', 'like', "%{$palavra}%");
    }

    public function scopeRecentes($query)
    {
        return $query->where('created_at', '>=', now()->subDays(30));
    }

    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }
}
