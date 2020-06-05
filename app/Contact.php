<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'primeiro_nome',
        'sobrenome',
        'nascimento',
        'email',
        'telefone',
        'endereco',
        'cidade',
        'estado'
    ];
}
