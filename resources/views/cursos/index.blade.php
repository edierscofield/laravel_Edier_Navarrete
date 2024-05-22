@extends('layouts.app')

@section('titulo', 'Listado de cursos')

@section('contenido')
    <br>
    <h3 class="text-center">Listado de cursos disponibles</h3>
    <br>
    <div class="row"> {{-- ya tenemos la fila --}}
        @foreach ($course as $cursito)
            <div class="col-sm"> {{-- abrimos columna --}}
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $cursito->nombre }}</h5>
                        <p class="card-text">{{ $cursito->descripcion }}</p>
                        <a href="{{ route('cursos.show', $cursito->id) }}" class="btn btn-success">Ver detalles</a> {{-- Vincula el botón a la ruta de detalles del curso --}}
                    </div>
                </div>
            </div>
        @endforeach
    </div> {{-- cierro el div row --}}
@endsection
