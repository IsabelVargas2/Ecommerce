@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('css/index.css') }}">

@section('content')
<div class="navbar">
    <div class="navbar-brand">
        <div class="navbar-logo">
            <img src="{{ asset('images/logounab.png') }}" alt="Logo">
        </div>
        <h1 class="navbar-title">Mi Tienda</h1>
    </div>
    <nav>
        <a href="{{ url('/products') }}">Productos</a>
        <a href="{{ url('/products/create') }}">Crear Producto</a>
        <a href="#about">Acerca de</a>
    </nav>
</div>

<div class="product-list">
    <div class="list-container">
        <h1>Nuestros Productos</h1>
        <a href="{{ url('/products/create') }}" class="btn btn-primary mb-3">+ Crear Nuevo Producto</a>

        <!-- 🔽 Filtro por categoría -->
        <form method="GET" action="{{ route('products.index') }}" class="mb-4">
            <label for="category">Filtrar por categoría:</label>
            <select name="category" id="category" onchange="this.form.submit()">
                <option value="">Todas</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ $categoryId == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </form>

        <div class="products-grid">
            @forelse ($products as $product)
                <div class="product-card">
                    <div class="product-image-card">
                        <!-- 🔽 MISMA IMAGEN PARA TODOS -->
                        <img src="{{ asset('images/products/default.jpg') }}" alt="Producto genérico">
                    </div>
                    <div class="product-card-body">
                        <h3>{{ $product->name }}</h3>
                        <p>{{ $product->description }}</p>
                        <p class="price">${{ number_format($product->price, 2) }}</p>
                        <a href="{{ url('/products/' . $product->id) }}" class="btn btn-primary">Ver Detalles</a>
                    </div>
                </div>
            @empty
                <p>No hay productos disponibles.</p>
            @endforelse
        </div>
    </div>
</div>

<div class="footer">
    <p>&copy; 2025 Mi Tienda. Todos los derechos reservados.</p>
</div>
@endsection
