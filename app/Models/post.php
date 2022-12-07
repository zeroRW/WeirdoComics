<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;

    protected $fillable = ["nombre", "edicionComic", "imagenCo", "compania", "cantidad", "precioCompra", "precioVenta" ,"created_at", "updated_at"];
}
