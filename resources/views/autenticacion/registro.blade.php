@extends('layouts.app')
@section('titulo', 'Registro de nuevo usuario')
@section('cabecera', 'Registro de nuevo usuario')

@section('contenido') 
    <div class="flex justify-center">
        <div class="card w-96 shadow-2xl bg-base-100">
            <div class="card-body">
                {{-- Mostrar mensajes de error --}}
                <div>
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="badge badge-warning">{{$error}}</div>
                        @endforeach
                    @endif
                </div>
                <form action="{{route('registro.store')}}" method="POST">
                    @csrf
                    {{-- Nombre --}}
                    <div class="form-control">
                        <label class="label" for="name">
                            <span class="label-text">Nombre</span>
                        </label>
                        <input type="text" name="name" placeholder="Escriba su nombre" maxlength="255" class="input input-sm input-bordered" required autofocus value="{{old('name')}}" />
                    </div>
                    {{-- Email --}}
                    <div class="form-control">
                        <label class="label" for="email">
                            <span class="label-text">Email</span>
                        </label>
                        <input type="email" name="email" placeholder="Escriba su email" maxlength="255" class="input input-sm input-bordered" required value="{{old('email')}}" />
                    </div>
                    {{-- Empresa o Club Deportivo --}}
                    <div class="form-control">
                        <label class="label" for="empresa">
                            <span class="label-text">Nombre Empresa o Club Deportivo</span>
                        </label>
                        <input type="text" name="empresa" placeholder="Mencione la empresa o escuela en la que usted practica un deporte" maxlength="255" class="input input-sm input-bordered" required value="{{old('empresa')}}" />
                    </div>
                    {{-- Teléfono --}}
                    <div class="form-control">
                        <label class="label" for="telefono">
                            <span class="label-text">Número de teléfono de contacto</span>
                        </label>
                        <input type="int" name="telefono" placeholder="Escriba su número de celular" maxlength="15" class="input input-sm input-bordered" required value="{{old('telefono')}}" />
                    </div>
                    {{-- Deporte --}}
                    <div class="form-control">
                        <label class="label" for="deporte">
                            <span class="label-text">Deporte que practicas</span>
                        </label>
                        <input type="text" deporte="deporte" placeholder="Para qué deporte te quieres vestir y sentir bien" maxlength="255" class="input input-sm input-bordered" required autofocus value="{{old('deporte')}}" />
                    </div>
                    {{-- Direccion --}}
                    <div class="form-control">
                        <label class="label" for="address">
                            <span class="label-text">Dirección</span>
                        </label>
                        <input type="text" name="address" placeholder="Escriba la dirección para envíos" maxlength="255" class="input input-sm input-bordered" required value="{{old('address')}}" />
                    </div>
                    {{-- Contraseña --}}
                    <div class="form-control">
                        <label class="label" for="password">
                            <span class="label-text">Password</span>
                        </label>
                        <input type="password" name="password" placeholder="Mínimo 5 caracteres" maxlength="45" class="input input-sm input-bordered" required />
                    </div>
                    {{-- Confirmar Contraseña --}}
                    <div class="form-control">
                        <label class="label" for="password_confirmation">
                            <span class="label-text">Confirmar password</span>
                        </label>
                        <input type="password" name="password_confirmation" placeholder="Confirmar password" maxlength="45" class="input input-sm input-bordered" required />
                    </div>
                    {{-- Botones --}}
                    <div class="form-control mt-6">
                        <button class="btn btn-sm btn-primary">Crear cuenta</button>
                        <a href="{{ route('inicio') }}" class="btn btn-sm btn-outline btn-primary mt-4">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection