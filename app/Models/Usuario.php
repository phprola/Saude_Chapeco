<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $table = "usuario";

    protected $fillable = [
        'nome', 'cpf', 'telefone', 'email', 'imagem'
    ];

    public function categoria(){
        return $this->belongsTo(Categoria::class,'categoria_id','id');
    }

}
