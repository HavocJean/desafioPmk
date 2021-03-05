<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doadores extends Model
{
    use HasFactory;

    protected $table = 'doadores';

    protected $fillable = [
        'nome',
        'email',
        'cpf',
        'telefone',
        'dt_nascimento',
        'intervalo_doacao', // Intervalo de Doação (1- Único, 2- Bimestral, 3- Semestral, 4- Anual);
        'vl_doacao',
        'forma_pag', // Forma de Pagamento (1- Débito, 2- Crédito);
        'endereco',
    ];
}