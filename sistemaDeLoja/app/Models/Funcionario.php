<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'sobrenome',
        'Email',
        'telefone',
        'cpf',
        'rg',
        'funcao',
        'numeroDacateiiraDeTrabalho',
        'turno'
     
    ];
}
