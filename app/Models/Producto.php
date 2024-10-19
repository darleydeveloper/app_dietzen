<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'descripcion', 'precio', 'tiempo_de_entrega', 'informacion_adicional', 'categoria_id'];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);  
    }
}
