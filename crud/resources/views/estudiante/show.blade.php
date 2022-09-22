@extends('layouts.app')

@section('template_title')
    {{ $estudiante->name ?? 'Show Estudiante' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Estudiante</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('estudiantes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Carnet:</strong>
                            {{ $estudiante->carnet }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $estudiante->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidos:</strong>
                            {{ $estudiante->apellidos }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $estudiante->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $estudiante->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Genero:</strong>
                            {{ $estudiante->genero }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $estudiante->email }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Nacimiento:</strong>
                            {{ $estudiante->fecha_nacimiento }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
