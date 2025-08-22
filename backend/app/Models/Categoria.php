<?php

namespace App\Models;

use App\Models\Categoria;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //Campos a utilizar
    protected $table = 'categorias';
    protected $fillable = ['nombre'];
}
