@extends('layouts.app')

@section('content')
<h1>Editar Actividad</h1>

<form action="{{ route('activities.update', $activity) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="actividad">Actividad:</label>
        <input type="text" name="actividad" id="actividad" class="form-control" value="{{ $activity->actividad }}" required>
    </div>

    <div class="form-group">
        <label for="descripcion">Descripción:</label>
        <textarea name="descripcion" id="descripcion" class="form-control" required>{{ $activity->descripcion }}</textarea>
    </div>

    <div class="form-group">
        <label for="estatus">Estatus:</label>
        <select name="estatus" id="estatus" class="form-control" required>
            <option value="Pendiente" {{ $activity->estatus == 'Pendiente' ? 'selected' : '' }}>Pendiente</option>
            <option value="Realizada" {{ $activity->estatus == 'Realizada' ? 'selected' : '' }}>Realizada</option>
            <option value="No Realizada" {{ $activity->estatus == 'No Realizada' ? 'selected' : '' }}>No Realizada</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Actualizar</button>
</form>
@endsection
