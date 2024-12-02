@extends('layouts.app')

@section('content')
<h1>Crear Actividad</h1>

<form action="{{ route('activities.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="actividad">Actividad:</label>
        <input type="text" name="actividad" id="actividad" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="descripcion">Descripción:</label>
        <textarea name="descripcion" id="descripcion" class="form-control" required></textarea>
    </div>

    <div class="form-group">
        <label for="estatus">Estatus:</label>
        <select name="estatus" id="estatus" class="form-control" required>
            <option value="Pendiente">Pendiente</option>
            <option value="Realizada">Realizada</option>
            <option value="No Realizada">No Realizada</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Crear</button>
</form>
@endsection
