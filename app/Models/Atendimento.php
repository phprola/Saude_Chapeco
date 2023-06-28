<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atendimento extends Model
{
    use HasFactory;

    protected $table = "Atendimento";

    protected $fillable = [
        'data', 'hora', 'funcionario_id', 'nome', 'email'
    ];

        public function funcionario(){
            return $this->belongsTo(Funcionario::class,'funcionario_id','id');
        }
}
