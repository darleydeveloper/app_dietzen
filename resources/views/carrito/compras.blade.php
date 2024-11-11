<!--@extends('layouts.app')
@section('titulo', 'Mis compras')
@section('cabecera', 'Detalle de compras a realizar')

@section('contenido')

<div class="container">
    <div class="row justifu-content-center">
        @include('partials.msg')
        @foreach ($productos as $item)
            <div class="col-3">
                <div class="card">
                    <img src="{{ asset('images/productos/pr_nuevofrente.png')}}" class="card-img-top">
                    <div class="card-body text-center">
                        <h2 class="card-title">Nombre</h2>
                        <div class="badge badge-outline"> precio </div>
                        <p>descripcion,150 </p>
                        <p>informacion_adicional,150</p>
                        <p>tiempo_de_entrega,30</p>
                    </div>
                    <div class="card-footer">
                        <form action="{{route('add')}}" method="post">
                            @csrf
                            <input type="hidden" name="id" id>
                            <input type="submit" name="btn" class="btn btn-success w-100" value="Agregar a Carrito">
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection-->