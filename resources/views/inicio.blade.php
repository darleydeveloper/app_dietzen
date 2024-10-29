@extends('layouts.app')
@section('titulo', 'Nuestros Productos')
@section('cabecera', 'Listar Productos')

@section('contenido')

<!-- Botonera de categorías por tipo de prenda -->

<div class="contenedor_botonera--TipoPrenda">
  <button class="custom-btn btn-12"><span>Ven a conocerlas</span><span>Novedades</span></button>
  <button class="custom-btn btn-12"><span>Ven a conocerlas</span><span>Camisetas</span></button>
  <button class="custom-btn btn-12"><span>Ven a conocerlos</span><span>Petos</span></button>
  <button class="custom-btn btn-12"><span>Ven a conocerlas</span><span>Pantalonetas</span></button>
  <button class="custom-btn btn-12"><span>Descubrelas</span><span>Lycras</span></button>
  <button class="custom-btn btn-12"><span>Grandes Ofertas</span><span>Chaquetas</span></button>
  <button class="custom-btn btn-12"><span>Desde $5000</span><span>Ofertas</span></button>
</div>

<!-- Carousel Promocional-->
<div class="slider">
  <div class="w-full">
      <div id="item1" class="carousel-item w-full">
          <img src="{{asset('images/assets/banner_promocional.png')}}" class="w-full" / >
      </div>
      <div id="item2" class="carousel-item w-full">
        <iframe class="w-full" width="560" height="315" src="https://www.youtube.com/embed/8WcbEpDvrXw?si=fOFASzUAdSN5c8Tn?" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
      </div>
      <div id="item3" class="carousel-item w-full">
          <img src="{{asset('images/assets/banner_promocional3.png')}}" class="w-full" / >
      </div>
      <div id="item4" class="carousel-item w-full">
          <img src="{{asset('images/assets/banner_promocional4.png')}}" class="w-full" / >
      </div>
  </div>
  <div class="flex w-full justify-center gap-2 py-2">
      <a href="#item1" class="btn btn-xs">1</a>
      <a href="#item2" class="btn btn-xs">2</a>
      <a href="#item3" class="btn btn-xs">3</a>
      <a href="#item4" class="btn btn-xs">4</a>
  </div>
</div>

<!-- Botonera por Disciplinas Deportivas -->

<div class="contenedor_disciplinasDeportivas">
  <div class="card">
    <div class="face font">
      <img src="{{ asset('images/assets/futbol_icono.avif')}}">
      <h3>Futbol</h3>
    </div>
    <div class="face back">
      <h4>Te ayudamos a lograr estilo y comodidad en...</h4>
      <div class="link">
        <a href="#">Camisetas</a><br>
        <a href="#">Petos</a><br>
        <a href="#">Pantalonetas</a><br>
        <a href="#">Pantalones</a><br>
        <a href="#">Lycras</a><br>
        <a href="#">Chaquetas</a>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="face font">
      <img src="{{ asset('images/assets/basketball_icono.avif')}}">
      <h3>Baloncesto</h3>
    </div>
    <div class="face back">
      <h4>Te ayudamos a lograr estilo y comodidad en...</h4>
      <div class="link">
        <a href="#">Camisetas</a><br>
        <a href="#">Petos</a><br>
        <a href="#">Pantalonetas</a><br>
        <a href="#">Pantalones</a><br>
        <a href="#">Lycras</a><br>
        <a href="#">Chaquetas</a>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="face font">
      <img src="{{ asset('images/assets/futsal_icono.avif')}}">
      <h3>Futbol Sala</h3>
    </div>
    <div class="face back">
      <h4>Te ayudamos a lograr estilo y comodidad en...</h4>
      <div class="link">
        <a href="#">Camisetas</a><br>
        <a href="#">Petos</a><br>
        <a href="#">Pantalonetas</a><br>
        <a href="#">Pantalones</a><br>
        <a href="#">Lycras</a><br>
        <a href="#">Chaquetas</a>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="face font">
      <img src="{{ asset('images/assets/rugby_icono.avif')}}">
      <h3>Rugby</h3>
    </div>
    <div class="face back">
      <h4>Te ayudamos a lograr estilo y comodidad en...</h4>
      <div class="link">
        <a href="#">Camisetas</a><br>
        <a href="#">Petos</a><br>
        <a href="#">Pantalonetas</a><br>
        <a href="#">Pantalones</a><br>
        <a href="#">Lycras</a><br>
        <a href="#">Chaquetas</a>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="face font">
      <img src="{{ asset('images/assets/tennis_icono.avif')}}">
      <h3>Tennis</h3>
    </div>
    <div class="face back">
      <h4>Te ayudamos a lograr estilo y comodidad en...</h4>
      <div class="link">
        <a href="#">Camisetas</a><br>
        <a href="#">Petos</a><br>
        <a href="#">Pantalonetas</a><br>
        <a href="#">Pantalones</a><br>
        <a href="#">Lycras</a><br>
        <a href="#">Chaquetas</a>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="face font">
      <img src="{{ asset('images/assets/voleibol_icono.avif')}}">
      <h3>Voleiball</h3>
    </div>
    <div class="face back">
      <h4>Te ayudamos a lograr estilo y comodidad en...</h4>
      <div class="link">
        <a href="#">Camisetas</a><br>
        <a href="#">Petos</a><br>
        <a href="#">Pantalonetas</a><br>
        <a href="#">Pantalones</a><br>
        <a href="#">Lycras</a><br>
        <a href="#">Chaquetas</a>
      </div>
    </div>
  </div>
</div>

<!--CATÁLOGO DE PRODUCTOS-->

@foreach($productos as $producto)

  <div class="contenedor_catalogoProductos">
    <div class="catalogo_productos">
      <div class="prueba">
        <div class="cardcatalogo">
          <div class="wrappercatalogo">
            <img src="https://picsum.photos/id/{{ $producto->id }}/240" alt="{{ $producto->nombre }}" class="cover-image">
          </div>
          <img src="https://picsum.photos/id/{{ $producto->id }}/240" alt="{{ $producto->nombre }}" class="character">
        </div>
        <div class="cardbody">
          <h2 class="card-title">{{ $producto->nombre }}</h2>
          <div class="badge badge-success badge-outline">Categoría: {{$producto->categoria->nombre}}</div>
          <div class="items-center text-center">{{ number_format($producto->precio) }}</div>
          <div class="items-center text-center">
            Elige tu talla<br>
            <span class="btn btn-xs btn-default btn-filter is-checked" data-filter="">32</span>
            <span class="btn btn-xs btn-default btn-filter is-checked" data-filter="">34</span>
            <span class="btn btn-xs btn-default btn-filter is-checked" data-filter="">36</span>
            <span class="btn btn-xs btn-default btn-filter is-checked" data-filter="">38</span>
            <span class="btn btn-xs btn-default btn-filter is-checked" data-filter="">40</span>
            <span class="btn btn-xs btn-default btn-filter is-checked" data-filter="">42</span>
          </div>
          <p>{{ Str::limit($producto->descripcion, 150) }}</p>
          <p>{{Str::limit($producto->información_adicional, 150)}}</p>
          <div class="items-center text-center stroke-current">
            <div class="badge badge-outline">{{ $producto->etiqueta1 }}</div>
            <div class="badge badge-outline">{{ $producto->Etiqueta2 }}</div>
          </div>
          <div class="card-actions justify-end "><button class="btn btn-primary">Comprar</button></div>
          <div class="card-actions justify-end mt-5">
          
          <!-- Botón para editar un producto nuevo -->

          <a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-warning btn-xs">Editar</a>
          
          <!-- Botón para eliminar un producto nuevo -->

          @if ($producto->pedidos->count() == 0)
              <form action="{{ route('productos.destroy', $producto->id) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" onclick="return confirm('¿Desea eliminar el producto {{ $producto->nombre }}?')" class="btn btn-error btn-xs">Eliminar</button>
              </form>
          @endif

          <!-- Botón para crear un producto nuevo -->
          <div>
            <a href="{{route('productos.create) }}" class="btn btn-warning btn-xs">Agregar</a>
          </div>
        </div>
      </div>
    </div>
  </div>

@endforeach




@endsection
