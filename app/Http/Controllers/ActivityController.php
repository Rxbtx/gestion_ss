<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function index()
    {
        $activities = Activity::all();
        return view('pages.tables',compact('activities'));
    }

    public function create()
    {
        return view('pages.create-activities');
    }

    public function store(Request $request)
    {
        $request->validate([
            'actividad' => 'required',
            'descripcion' => 'required',
            'estatus' => 'required|in:Realizada,Pendiente,No Realizada',
        ]);

        Activity::create($request->all());

        return redirect()->route('activities.index')
                          ->with('success', 'Actividad creada exitosamente.');
    }

    public function edit(Activity $activity)
    {
        return view('pages.edit-activities', compact('activity'));
    }

    public function update(Request $request, Activity $activity)
    {
        $request->validate([
            'actividad' => 'required',
            'descripcion' => 'required',
            'estatus' => 'required|in:Realizada,Pendiente,No Realizada',
        ]);

        $activity->update($request->all());
        $activity->save();

        return redirect()->route('activities.index')
                         ->with('success', 'Actividad actualizada exitosamente.');
    }

    public function destroy(Activity $activity)
    {
        $activity->delete();
        return redirect()->route('activities.index')
                         ->with('success', 'Actividad eliminada exitosamente.');
    }
}
