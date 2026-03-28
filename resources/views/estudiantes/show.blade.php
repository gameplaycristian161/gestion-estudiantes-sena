@extends('layouts.app')
@section('title', 'Detalle de Estudiante')
@section('content')

<div class="card shadow-sm border-0 mx-auto" style="max-width: 600px;">
    <div class="card-header bg-white py-3 border-bottom border-info border-3">
        <h4 class="mb-0 text-info-emphasis"><i class="bi bi-person-vcard"></i> Detalle del Estudiante</h4>
    </div>
    <div class="card-body p-4">

        <div class="text-center mb-4">
            <div class="bg-secondary bg-opacity-10 rounded-circle d-inline-flex justify-content-center align-items-center mb-3" style="width: 100px; height: 100px;">
                <i class="bi bi-person-fill text-secondary" style="font-size: 4rem;"></i>
            </div>
            <h3 class="fw-bold mb-0">{{ $estudiante->nombre }} {{ $estudiante->apellido }}</h3>
            <p class="text-muted"><i class="bi bi-envelope"></i> {{ $estudiante->email }}</p>
        </div>

        <ul class="list-group list-group-flush border-top mb-4">
            <li class="list-group-item px-0 py-3 d-flex justify-content-between align-items-center">
                <span class="text-muted"><i class="bi bi-telephone text-primary"></i> Teléfono</span>
                <span class="fw-semibold">{{ $estudiante->telefono ?? 'N/A' }}</span>
            </li>
            <li class="list-group-item px-0 py-3 d-flex justify-content-between align-items-center">
                <span class="text-muted"><i class="bi bi-hash text-danger"></i> Ficha SENA</span>
                <span class="fw-semibold">{{ $estudiante->ficha }}</span>
            </li>
            <li class="list-group-item px-0 py-3 d-flex justify-content-between align-items-center">
                <span class="text-muted"><i class="bi bi-book text-success"></i> Programa</span>
                <span class="fw-semibold">{{ $estudiante->programa }}</span>
            </li>
            <li class="list-group-item px-0 py-3 d-flex justify-content-between align-items-center">
                <span class="text-muted"><i class="bi bi-calendar-check text-info"></i> Registrado en</span>
                <span class="fw-semibold">{{ $estudiante->created_at->format('d/m/Y H:i A') }}</span>
            </li>
        </ul>

        <div class="d-flex justify-content-between align-items-center">
            <a href="{{ route('estudiantes.index') }}" class="btn btn-outline-secondary"><i class="bi bi-arrow-left"></i> Volver a la Lista</a>
            <div>
                <a href="{{ route('estudiantes.edit', $estudiante) }}" class="btn btn-warning text-dark"><i class="bi bi-pencil-square"></i> Editar</a>
            </div>
        </div>

    </div>
</div>

@endsection
