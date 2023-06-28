<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atendimento extends Model
{
    use HasFactory;

    protected $table = "Atendimento";

    protected $fillable = [
        'data', 'hora', 'funcionario_id', 'nome', 'email', 'paciente_id',
    ];

        public function funcionario(){
            return $this->belongsTo(Funcionario::class,'funcionario_id','id');
        }
        public function paciente(){
            return $this->belongsTo(Paciente::class,'paciente_id','id');
        }
}
