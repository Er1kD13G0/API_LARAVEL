<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Itens extends Model
{
    use HasFactory;

    protected $table = 'itens'; 
    protected $primaryKey = 'id'; 
    public $incrementing = true; 
    protected $keyType = 'int'; 

    protected $fillable = [
        'id',
        'dados'
    ];
}
