@extends('layouts.app')
@section('titulo', 'Nuestros Productos')
@section('cabecera', 'Listar Productos')

@section('contenido')
<div class="flex justify-end m-4">
    <a href="{{ route('productos.create)}}" class="btn btn-outline">Nuevo producto</a>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 m-6">
    @foreach($productos as $producto)
        <div class="cardcatalogo">
            <div class="wrappercatalogo">
            <img src="https://picsum.photos/id/{{ $producto->id }}/240"/> 
            </div>
            <img src="https://picsum.photos/id/{{ $producto->id }}/240"/> 
            <div class="card-body">
                <h2 class="card-title">{{ $producto->nombre}}</h2>
                <div class="badge badge-outline">{{ $producto->precio}}</div>
                <p>{{ Str::limit($producto->descripcion,150)}}</p>
                <p>{{ Str::limit($producto->informacion_adicional,150)}}</p>
                <p>{{ Str::limit($producto->informacion_adicional,30)}}</p>
                <div class="badge badge-outline">{{ $producto->etiqueta1 }}</div>
                <div class="badge badge-outline h-4 w-4 stroke-current">{{ $producto->etiqueta2 }}</div>
            </div>
            <div class="card-actions-justify-end">
                <a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-outline btn-xs">Editar</a>
                <form action="{{ route('productos.destroy', $producto->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline btn-xs">Eliminar</button>
                </form>
                
                <button class="btn btn-primary btn-accent badge-outline btn-xs">Comprar ahora</button>
            </div>
        </div>
    @endforeach 
</div>
@endsection('contenido')
