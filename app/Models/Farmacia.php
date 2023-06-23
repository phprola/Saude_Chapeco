<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Farmacia extends Model
{
    use HasFactory;
    protected $table = "farmacia";

    protected $fillable =[
        'codigo', 'medicamento', 'quantidade'
    ];
}
