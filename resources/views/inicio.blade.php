@extends('layouts.app')
@section('titulo', 'DietzenStore')
@section('cabecera', '“CUMPLE TUS SUEÑOS, CORRE TRAS ELLOS, DIETZEN ESTÁ CONTIGO”')

@section('contenido')
<div class="tipoprenda">
  <button class="custom-btn btn-12"><span>Ven a conocerlas</span><span>Camisetas</span></button>
  <button class="custom-btn btn-12"><span>Ven a conocerlos</span><span>Petos</span></button>
  <button class="custom-btn btn-12"><span>Ven a conocerlas</span><span>Pantalonetas</span></button>
  <button class="custom-btn btn-12"><span>Ven a descubrirlas</span><span>Lycras</span></button>
  <button class="custom-btn btn-12"><span>Ven a descubrirlas</span><span>Chaquetas</span></button>
</div>

<div class="slider">
  <div class="carousel w-full">
    <div id="item1" class="carousel-item w-full">
      <img 
        src="{{asset('images/assets/banner_promocional.png')}}"
        class="w-full" / >
    </div>
    <div id="item2" class="carousel-item w-full">
      <img
        src="{{asset('images/assets/banner_promocional2.png')}}"
        class="w-full" />
    </div>
    <div id="item3" class="carousel-item w-full">
      <img
        src="{{asset('images/assets/banner_promocional3.png')}}"
        class="w-full" />
    </div>
    <div id="item4" class="carousel-item w-full">
      <img
        src="{{asset('images/assets/banner_promocional4.png')}}"
        class="w-full" />
    </div>
  </div>
  <div class="flex w-full justify-center gap-2 py-2">
    <a href="#item1" class="btn btn-xs">1</a>
    <a href="#item2" class="btn btn-xs">2</a>
    <a href="#item3" class="btn btn-xs">3</a>
    <a href="#item4" class="btn btn-xs">4</a>
  </div>
</div>
<div class="disciplinas">
  <div class="card">
    <div class="face font">
        <img src="{{ asset('images/assets/futbol_icono.avif')}}"
          <h3>
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
        <img src="{{ asset('images/assets/basketball_icono.avif')}}"
        <h3>
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
        <img src="{{ asset('images/assets/futsal_icono.avif')}}"
        <h3>
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
        <img src="{{ asset('images/assets/rugby_icono.avif')}}"
        <h3>
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
        <img src="{{ asset('images/assets/tennis_icono.avif')}}"
        <h3>
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
        <img src="{{ asset('images/assets/voleibol_icono.avif')}}"
        <h3>
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


@endsection