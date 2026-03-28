<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    // READ — Listar todos los estudiantes con buscador
    public function index(Request $request)
    {
        $busqueda = $request->get('busqueda');

        // Si hay búsqueda, filtramos por nombre, si no, traemos todos.
        if ($busqueda) {
            $estudiantes = Estudiante::where('nombre', 'like', "%{$busqueda}%")
                ->orWhere('apellido', 'like', "%{$busqueda}%")
                ->get();
        } else {
            $estudiantes = Estudiante::all();
        }

        return view('estudiantes.index', compact('estudiantes', 'busqueda'));
    }

    // CREATE — Mostrar formulario de creación
    public function create()
    {
        return view('estudiantes.create');
    }

    // CREATE — Guardar el nuevo estudiante en la BD
    public function store(Request $request)
    {
        $request->validate([
            'nombre'   => 'required|min:2|max:100',
            'apellido' => 'required|min:2|max:100',
            'email'    => 'required|email|unique:estudiantes',
            'telefono' => 'nullable|string|max:20',
            'ficha'    => 'required',
            'programa' => 'required',
        ]);

        Estudiante::create($request->all());

        return redirect()->route('estudiantes.index')
                         ->with('success', 'Estudiante registrado correctamente.');
    }

    // READ — Mostrar un único estudiante
    public function show(Estudiante $estudiante)
    {
        return view('estudiantes.show', compact('estudiante'));
    }

    // UPDATE — Mostrar formulario de edición
    public function edit(Estudiante $estudiante)
    {
        return view('estudiantes.edit', compact('estudiante'));
    }

    // UPDATE — Guardar los cambios en la BD
    public function update(Request $request, Estudiante $estudiante)
    {
        $request->validate([
            'nombre'   => 'required|min:2|max:100',
            'apellido' => 'required|min:2|max:100',
            'email'    => 'required|email|unique:estudiantes,email,' . $estudiante->id,
            'telefono' => 'nullable|string|max:20',
            'ficha'    => 'required',
            'programa' => 'required',
        ]);

        $estudiante->update($request->all());

        return redirect()->route('estudiantes.index')
                         ->with('success', 'Estudiante actualizado correctamente.');
    }

    // DELETE — Eliminar el estudiante
    public function destroy(Estudiante $estudiante)
    {
        $estudiante->delete();

        return redirect()->route('estudiantes.index')
                         ->with('success', 'Estudiante eliminado correctamente.');
    }
}
