@extends('layouts.app')
@section('titulo', 'Crear Producto')
@section('cabecera', 'Crear Producto')

@section('contenido') 
    <div class="flex justify-center">
        <div class="card w-96 shadow-2xl bg-base-100">
            <div class="card-body">
                {{-- Formulario para crear producto --}}
                    <form action="{{ route('productos.destroy', $producto->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline btn-xs">Eliminar</button>
                    </form>

                <form action="{{route('productos.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{-- Categoria --}}
                    <div class="form-control">
                        <label class="label" for="categoria_id">
                            <span class="label-text">Categoría</span>
                        </label>
                        <select name="categoria_id" class="select select-bordered">
                            @foreach ($categorias as $categoria)
                                <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                    {{-- Nombre --}}
                    <div class="form-control">
                        <label class="label" for="nombre">
                            <span class="label-text">Nombre</span>
                        </label>
                        <input type="text" name="nombre" placeholder="Nombre del producto" maxlength="100" class="input input-bordered" value="{{old('nombre')}}" required />
                    </div>
                     {{-- Imagen --}}
                    <!--CRUD IMAGEN 31/10-->

                    <form action="{{ route('productos.destroy', $producto->id) }}" enctype="multipart/form" method="POST">
                    @csrf
                        <input type="file" name="imagen"/>
                        <input type="submit" value="Registrar" class="btn btn-error"Registrar/>
                    </form>
                    </div>
                     <!--<div class="form-control">
                        <label class="label" for="imagen">
                            <span class="label-text">Imagen</span>
                        </label>
                        <input type="file" name="imagen" class="file-input file-input-bordered file-input-success file-input-sm w-full max-w-xs"  accept=".jpg" required />
                    </div>
                    {{-- Descripcion --}}

                    <!--<form action="{{ route('productos.destroy', $producto->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline btn-xs">Eliminar</button>
                    </form>-->

                    <div class="form-control">
                        <label class="label" for="descripcion">
                            <span class="label-text">Descripción</span>
                        </label>
                        <input type="text" name="descripcion" placeholder="Escriba la descripción de la prenda" maxlength="255" class="input input-bordered" value="{{old('descripcion')}}" />
                    </div>
                    {{-- Precio --}}
                    <div class="form-control">
                        <label class="label" for="precio">
                            <span class="label-text">Precio</span>
                        </label>
                        <input type="number" name="precio" placeholder="Escriba el precio" class="input input-bordered" value="{{old('precio')}}" required />
                    </div>
                    {{-- Tiempo de Entrega --}}
                    <div class="form-control">
                        <label class="label" for="tiempo_de_entrega">
                            <span class="label-text">Tiempo de Entrega</span>
                        </label>
                        <input type="number" name="tiempo_de_entrega" placeholder="Escriba el número de días necesarios para entregar la prenda" class="input input-bordered" value="{{old('tiempo_de_entrega')}}" required />
                    </div>
                    {{-- Información Adicional --}}
                    <div class="form-control">
                        <label class="label" for="informacion_adicional">
                            <span class="label-text">Información Adicional</span>
                        </label>
                        <input type="text" name="informacion_adicional" placeholder="Mencione procesos específicos que mejoren la experiencia de compra del cliente" maxlength="255" class="input input-bordered" value="{{old('informacion_adicional')}}" />
                    </div>
                    {{-- Etiquetas --}}
                    <div class="form-control">
                        <label class="label" for="etiqueta1">
                            <span class="label-text">Etiqueta 1</span>
                        </label>
                        <input type="text" name="etiqueta1" placeholder="Ingrese el hashtag principal de la prenda" maxlength="80" class="input input-bordered" value="{{old('etiqueta1')}}" required />
                    </div>
                    <div class="form-control">
                        <label class="label" for="etiqueta2">
                            <span class="label-text">Etiqueta 2</span>
                        </label>
                        <input type="text" name="etiqueta2" placeholder="Ingrese el hashtag alterno de la prenda" maxlength="80" class="input input-bordered" value="{{old('etiqueta2')}}" required />
                    </div>
                    {{-- Crear Producto --}}
                    <div class="form-control mt-6">
                        <button class="btn btn-primary">Crear Producto</button>
                        <a href="{{ route('productos.index') }}" class="btn btn-outline btn-primary mt-4">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection