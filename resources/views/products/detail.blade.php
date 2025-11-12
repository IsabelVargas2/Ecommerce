@extends('admin.layouts.app')

@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Detalle del Producto #{{ $id }}</h6>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-4">
                        <div class="row">
                            <div class="col-md-6">
                                <p><strong>ID del Producto:</strong> {{ $id }}</p>
                                <p><strong>Categoría:</strong> 
                                    @if($category)
                                        <span class="badge bg-primary">{{ $category }}</span>
                                    @else
                                        <span class="text-muted">No especificada</span>
                                    @endif
                                </p>
                            </div>
                        </div>
                        
                        <div class="mt-4">
                            <a href="{{ url('/') }}" class="btn btn-primary">Volver al Inicio</a>
                            <a href="{{ route('admin.products.table') }}" class="btn btn-secondary">Administración</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection