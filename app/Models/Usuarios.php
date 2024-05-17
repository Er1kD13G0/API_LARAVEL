<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    use HasFactory;

    protected $table = 'usuarios'; 
    protected $primaryKey = 'id_usu'; 
    public $incrementing = true; 
    protected $keyType = 'int'; 

    protected $fillable = [
        'nome_usu',
        'email',
        'senha',
        'imagem'
    ];
}
