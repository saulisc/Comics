<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comics extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'idComic','nombre','edicion','compania','cantidad','precioCompra','precioVenta',
    ];
}
