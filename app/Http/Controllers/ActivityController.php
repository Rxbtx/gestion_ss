<?php

namespace App\Http\Controllers;

use App\Models\Actividad;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function index()
    {
        $actividades = Actividad::all();
        return view('actividades.index', compact('actividades'));
    }

    public function create()
    {
        return view('actividades.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'actividad' => 'required',
            'descripcion' => 'required',
            'estatus' => 'required|in:Realizada,Pendiente,No Realizada',
        ]);

        Actividad::create($request->all());

        return redirect()->route('actividades.index')
                         ->with('success', 'Actividad creada exitosamente.');
    }

    public function edit(Actividad $actividad)
    {
        return view('actividades.edit', compact('actividad'));
    }

    public function update(Request $request, Actividad $actividad)
    {
        $request->validate([
            'actividad' => 'required',
            'descripcion' => 'required',
            'estatus' => 'required|in:Realizada,Pendiente,No Realizada',
        ]);

        $actividad->update($request->all());

        return redirect()->route('actividades.index')
                         ->with('success', 'Actividad actualizada exitosamente.');
    }

    public function destroy(Actividad $actividad)
    {
        $actividad->delete();
        return redirect()->route('actividades.index')
                         ->with('success', 'Actividad eliminada exitosamente.');
    }
}
