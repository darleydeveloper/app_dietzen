@extends('layouts.app')
@section('titulo', 'DietzenStore')
@section('cabecera', '“CUMPLE TUS SUEÑOS, CORRE TRAS ELLOS, DIETZEN ESTÁ CONTIGO”')

@section('contenido')

    @foreach($productos as $producto)
    <div class="card glass w-96">
        <figure>
            <div class="cardcatalogo">
            <div class="wrappercatalogo">
            <img src="{{ asset('images/productos/pr_nuevofrente.png')}}" class="cover-image">
            </div>
            <img src="{{ asset('images/productos/pr_espalda_nuevoooback2.png')}}" class="character">
            </div>
        </figure>
        <div class="card-body">
            <h2 class="card-title">Life hack</h2>
            <p>How to park your car at your garage?</p>
            <div class="card-actions justify-end">
            <button class="btn btn-primary">Learn now!</button>
        </div>
    </div>
    @endforeach

@endsection