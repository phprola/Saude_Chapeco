<?php

namespace App\Models;

use Dompdf\FrameDecorator\Table;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    protected $table = "paciente";

    protected $fillable = [
        'nome', 'telefone', 'email', 'UBS'
    ];
}
