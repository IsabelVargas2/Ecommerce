@extends('admin.layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <h3>Agregar nueva Marca</h3>

            <form action="{{ route('admin.brands.store') }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="name">Nombre de la marca</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-success">Guardar</button>
                <a href="{{ route('admin.brands.table') }}" class="btn btn-secondary">Volver</a>
            </form>
        </div>
    </div>
@endsection
