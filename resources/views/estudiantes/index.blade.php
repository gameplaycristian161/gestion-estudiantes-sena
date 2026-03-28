@extends('layouts.app')
@section('title', 'Lista de Estudiantes')
@section('content')

<div class="card shadow-sm border-0 mb-4">
    <div class="card-body d-flex justify-content-between align-items-center">
        <h4 class="card-title mb-0 sena-green">
            <i class="bi bi-people-fill"></i> Lista de Estudiantes
        </h4>
        <a href="{{ route('estudiantes.create') }}" class="btn btn-success rounded-pill fw-semibold">
            <i class="bi bi-plus-circle"></i> Nuevo Estudiante
        </a>
    </div>
</div>

<!-- Buscador -->
<div class="card shadow-sm border-0 mb-4">
    <div class="card-body">
        <form action="{{ route('estudiantes.index') }}" method="GET" class="d-flex w-50">
            <div class="input-group">
                <span class="input-group-text bg-white border-end-0"><i class="bi bi-search"></i></span>
                <input type="text" name="busqueda" class="form-control border-start-0" 
                       placeholder="Buscar por nombre o apellido..." value="{{ request('busqueda') }}">
                <button type="submit" class="btn btn-outline-secondary">Buscar</button>
                @if(request('busqueda'))
                    <a href="{{ route('estudiantes.index') }}" class="btn btn-outline-danger">Limpiar</a>
                @endif
            </div>
        </form>
    </div>
</div>

<div class="card shadow-sm border-0">
    <div class="card-body p-0">
        @if($estudiantes->isEmpty())
            <div class="text-center p-5 text-muted">
                <i class="bi bi-inbox fs-1"></i>
                <p class="mt-3">No hay estudiantes registrados o no se encontraron resultados.</p>
            </div>
        @else
            <div class="table-responsive">
                <table class="table table-hover mb-0 align-middle">
                    <thead class="table-light">
                        <tr>
                            <th># ID</th>
                            <th>Nombre Completo</th>
                            <th>Email</th>
                            <th>Teléfono</th>
                            <th>Ficha</th>
                            <th>Programa</th>
                            <th class="text-center">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($estudiantes as $est)
                        <tr>
                            <td><span class="badge bg-secondary">{{ $est->id }}</span></td>
                            <td class="fw-semibold">{{ $est->nombre }} {{ $est->apellido }}</td>
                            <td><a href="mailto:{{ $est->email }}" class="text-decoration-none">{{ $est->email }}</a></td>
                            <td>{{ $est->telefono ?? 'N/A' }}</td>
                            <td>{{ $est->ficha }}</td>
                            <td>{{ $est->programa }}</td>
                            <td class="text-center">
                                <div class="btn-group btn-group-sm" role="group">
                                    <a href="{{ route('estudiantes.show', $est) }}" class="btn btn-info text-white" title="Ver Detalle">
                                        <i class="bi bi-eye-fill"></i>
                                    </a>
                                    <a href="{{ route('estudiantes.edit', $est) }}" class="btn btn-warning" title="Editar">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <form action="{{ route('estudiantes.destroy', $est) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger rounded-end" title="Eliminar" onclick="return confirm('¿Estás seguro de eliminar a {{ $est->nombre }}? Esta acción no se puede deshacer.')">
                                            <i class="bi bi-trash3-fill"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
</div>

@endsection
