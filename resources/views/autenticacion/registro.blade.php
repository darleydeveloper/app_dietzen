@extends('layouts.app')
@section('cabecera', 'Registro de nuevo usuario')

@section('contenido') 
    <div class="flex justify-center">
        <div class="interlogueo">
            <div class="card-body">
                {{-- Mostrar mensajes de error --}}
                <div>
                    @if($errors->any()) 
                        @foreach ($errors->all() as $error)
                            <div class="badge badge-warning">{{$error}}</div>
                        @endforeach                
                    @endif
                </div>
            </div>
            <form action="{{route('registro.store')}}" method="POST">
                @csrf
                {{-- Nombre --}}
                <div class="form-control">
                    <label Class="label" for="name">
                        <span class="label-text">Nombre</span>
                    </label>
                    <input type="text" name="name" placeholder="Escriba su nombre y apellido" maxlength="255" class="input input-sm input-bordered" required autofocus value="{{old('name')}}" />
                </div>
                {{-- E-mail --}}
                <div class="form-control">
                    <label Class="label" for="email">
                        <span class="label-text">E-mail</span>
                    </label>
                    <input type="text" name="email" placeholder="Digite su correo electrónico" maxlength="150" class="input input-sm input-bordered" required autofocus value="{{old('email')}}" />
                </div>
                {{-- Empresa --}}
                <div class="form-control">
                    <label Class="label" for="empresa">
                        <span class="label-text measureText">Nombre Empresa o Club Deportivo</span>
                    </label>
                    <input type="text" name="empresa" placeholder="Mencione la empresa o Club deportivo en el que realiza un deporte" maxlength="255" class="input input-sm input-bordered" required autofocus value="{{old('empresa')}}" />
                </div>
                {{-- Telefono --}}
                <div class="form-control">
                    <label Class="label" for="telefono">
                        <span class="label-text measureText">Número de teléfono de contacto</span>
                    </label>
                    <input type="text" name="telefono" placeholder="Escriba su número celular" maxlength="35" class="input input-sm input-bordered" required autofocus value="{{old('telefono')}}" />
                </div>
                {{-- Deporte --}}
                <div class="form-control">
                    <label Class="label" for="deporte">
                        <span class="label-text measureText">Deporte que practicas</span>
                    </label>
                    <input type="text" name="deporte" placeholder="Para la práctica de qué deporte te quieres vestir y sentir bien" maxlength="150" class="input input-sm input-bordered" required autofocus value="{{old('deporte')}}" />
                </div>
                {{-- Dirección --}}
                <div class="form-control">
                    <label Class="label" for="address">
                        <span class="label-text measureText">Dirección</span>
                    </label>
                    <input type="text" name="address" placeholder="Escriba la dirección para envios" maxlength="150" class="input input-sm input-bordered" required autofocus value="{{old('address')}}" />
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
    </div>
@endsection