<?php

use App\Models\Aluno;
use App\Policies\AlunoPolicy;
use Illuminate\Support\Facades\Gate;

Gate::policy(Aluno::class, AlunoPolicy::class);
