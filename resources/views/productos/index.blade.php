@extends('layouts.app')
@section('titulo', 'Nuestros Productos')
@section('cabecera', 'Listar Productos')

<section id="catalogo">
    <div class="catalogo_productos grid grid-cols-1 sm:grid-cols-4 lg:grid-cols3 gap-x-6 gap-y-10"">
        <div class="prueba">
            <div class="cardcatalogo">
                <div class="wrappercatalogo">
                <img src="{{ asset('images/productos/pr_nuevofrente.png')}}" class="cover-image">  
                </div>
                <img src="{{ asset('images/productos/pr_espalda_nuevoooback2.png')}}" class="character">
            </div>
            <div class="card-body">
                <h2 class="card-title">{{ "Camiseta" }}</h2>
                <p>{{ "lorem ipsum dolor sit amet, ipsum dolor sit amet, ipsum dolor sit am" }}</p>
                <div class="card-actions justify-end">
                <button class="btn btn-primary">Buy Now</button>
                </div>
            </div>
        </div>
        <div class="prueba">
            <div class="cardcatalogo">
                <div class="wrappercatalogo">
                <img src="{{ asset('images/productos/pr_nuevofrente.png')}}" class="cover-image">  
                </div>
                <img src="{{ asset('images/productos/pr_espalda_nuevoooback2.png')}}" class="character">
            </div>
            <div class="card-body">
                <h2 class="card-title">{{ "Camiseta" }}</h2>
                <p>{{ "lorem ipsum dolor sit amet, ipsum dolor sit amet, ipsum dolor sit am" }}</p>
                <div class="card-actions justify-end">
                <button class="btn btn-primary">Buy Now</button>
                </div>
            </div>
        </div>
        <div class="prueba">
            <div class="cardcatalogo">
                <div class="wrappercatalogo">
                <img src="{{ asset('images/productos/pr_nuevofrente.png')}}" class="cover-image">  
                </div>
                <img src="{{ asset('images/productos/pr_espalda_nuevoooback2.png')}}" class="character">
            </div>
            <div class="card-body">
                <h2 class="card-title">{{ "Camiseta" }}</h2>
                <p>{{ "lorem ipsum dolor sit amet, ipsum dolor sit amet, ipsum dolor sit am" }}</p>
                <div class="card-actions justify-end">
                <button class="btn btn-primary">Buy Now</button>
                </div>
            </div>
        </div>
        <div class="prueba">
            <div class="cardcatalogo">
                <div class="wrappercatalogo">
                <img src="{{ asset('images/productos/pr_nuevofrente.png')}}" class="cover-image">  
                </div>
                <img src="{{ asset('images/productos/pr_espalda_nuevoooback2.png')}}" class="character">
            </div>
            <div class="card-body">
                <h2 class="card-title">{{ "Camiseta" }}</h2>
                <p>{{ "lorem ipsum dolor sit amet, ipsum dolor sit amet, ipsum dolor sit am" }}</p>
                <div class="card-actions justify-end">
                <button class="btn btn-primary">Buy Now</button>
                </div>
            </div>
        </div>
        <div class="prueba">
            <div class="cardcatalogo">
                <div class="wrappercatalogo">
                <img src="{{ asset('images/productos/pr_nuevofrente.png')}}" class="cover-image">  
                </div>
                <img src="{{ asset('images/productos/pr_espalda_nuevoooback2.png')}}" class="character">
            </div>
            <div class="card-body">
                <h2 class="card-title">{{ "Camiseta" }}</h2>
                <p>{{ "lorem ipsum dolor sit amet, ipsum dolor sit amet, ipsum dolor sit am" }}</p>
                <div class="card-actions justify-end">
                <button class="btn btn-primary">Buy Now</button>
                </div>
            </div>
        </div>

    </div>
</section>
