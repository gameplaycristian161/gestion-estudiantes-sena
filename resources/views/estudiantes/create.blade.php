@extends('layouts.app')
@section('title', 'Registrar Estudiante')
@section('content')

<div class="card shadow-sm border-0 mx-auto" style="max-width: 600px;">
    <div class="card-header bg-white py-3 border-bottom border-success border-3">
        <h4 class="mb-0 sena-green"><i class="bi bi-person-plus-fill"></i> Registrar Nuevo Estudiante</h4>
    </div>
    <div class="card-body p-4">

        @if($errors->any())
            <div class="alert alert-danger" role="alert">
                <strong><i class="bi bi-exclamation-triangle-fill"></i> Verifica los siguientes errores:</strong>
                <ul class="mb-0 mt-2">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('estudiantes.store') }}" method="POST">
            @csrf
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Nombre <span class="text-danger">*</span></label>
                    <input type="text" name="nombre" class="form-control" value="{{ old('nombre') }}" placeholder="Ej: Juan Sebastián" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Apellido <span class="text-danger">*</span></label>
                    <input type="text" name="apellido" class="form-control" value="{{ old('apellido') }}" placeholder="Ej: Pérez Roa" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Correo Electrónico <span class="text-danger">*</span></label>
                    <input type="email" name="email" class="form-control" value="{{ old('email') }}" placeholder="juan@email.com" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Teléfono</label>
                    <input type="text" name="telefono" class="form-control" value="{{ old('telefono') }}" placeholder="Ej: 3001234567">
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Ficha SENA <span class="text-danger">*</span></label>
                    <input type="text" name="ficha" class="form-control" value="{{ old('ficha') }}" placeholder="Ej: 2883614" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Programa <span class="text-danger">*</span></label>
                    <input type="text" name="programa" class="form-control" value="{{ old('programa') }}" placeholder="ADSO" required>
                </div>
            </div>
            
            <hr class="my-4">
            <div class="d-flex justify-content-end gap-2">
                <a href="{{ route('estudiantes.index') }}" class="btn btn-outline-secondary"><i class="bi bi-arrow-left"></i> Cancelar</a>
                <button type="submit" class="btn btn-success px-4"><i class="bi bi-floppy-fill"></i> Guardar Estudiante</button>
            </div>
        </form>
    </div>
</div>

@endsection
