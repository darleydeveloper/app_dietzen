<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'descripcion', 'precio', 'tiempo_de_entrega', 'informacion_adicional', 'etiqueta1', 'etiqueta2', 'categoria_id'];
    public $timestamps = false;  //aquí un cambio, introduje este comando 

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);  
    }
}
