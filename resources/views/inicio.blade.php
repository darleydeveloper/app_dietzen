@extends('layouts.app')
@section('titulo', 'Nuestros Productos')
@section('cabecera', 'Listar Productos')

@section('contenido')
    <div class="contenedor_botonera--TipoPrenda">
        <button class="custom-btn btn-12"><span>Ven a conocerlas</span><span>Novedades</span></button>
        <button class="custom-btn btn-12"><span>Ven a conocerlas</span><span>Camisetas</span></button>
        <button class="custom-btn btn-12"><span>Ven a conocerlos</span><span>Petos</span></button>
        <button class="custom-btn btn-12"><span>Ven a conocerlas</span><span>Pantalonetas</span></button>
        <button class="custom-btn btn-12"><span>Descubrelas</span><span>Lycras</span></button>
        <button class="custom-btn btn-12"><span>Grandes Ofertas</span><span>Chaquetas</span></button>
        <button class="custom-btn btn-12"><span>Desde $5000</span><span>Ofertas</span></button>
    </div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <div class="contenedor_catalogoProductos">
        <div class="catalogo_productos">
            <div class="prueba">
                <div class="cardcatalogo">
                    <div class="wrappercatalogo">
                    <img src="https://picsum.photos/200/300" alt="nombreproducto" class="cover-image">
                    </div>
                    <img src="https://picsum.photos/200/300" alt="nombreproducto" class="character">
                </div>
                <div class="items-center text-center">
            Elige tu talla<br>
                <span class="btn btn-xs btn-default btn-filter is-checked" data-filter="">32</span>
                <span class="btn btn-xs btn-default btn-filter is-checked" data-filter="">34</span>
                <span class="btn btn-xs btn-default btn-filter is-checked" data-filter="">36</span>
                <span class="btn btn-xs btn-default btn-filter is-checked" data-filter="">38</span>
                <span class="btn btn-xs btn-default btn-filter is-checked" data-filter="">40</span>
                <span class="btn btn-xs btn-default btn-filter is-checked" data-filter="">42</span>
            </divA>
        </div>
    </div>
@endsection