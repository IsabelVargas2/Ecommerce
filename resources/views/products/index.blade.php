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
            <a href="{{ url('/products/create') }}" class="btn btn-primary">+ Crear Nuevo Producto</a>

            <div class="products-grid">
                <div class="product-card">
                    <div class="product-image-card">
                        <img src="https://images.unsplash.com/photo-1496181133206-80ce9b88a853?w=500&h=400&fit=crop"
                            alt="Laptop Pro 15">
                    </div>
                    <div class="product-card-body">
                        <h3>Laptop Pro 15</h3>
                        <p>Procesador Intel i7, 16GB RAM, 512GB SSD</p>
                        <p class="price">$1,299.99</p>
                        <a href="{{ url('/products/1') }}" class="btn btn-primary">Ver Detalles</a>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image-card">
                        <img src="https://images.unsplash.com/photo-1527864550417-7fd91fc51a46?w=500&h=400&fit=crop"
                            alt="Mouse Inalámbrico">
                    </div>
                    <div class="product-card-body">
                        <h3>Mouse Inalámbrico</h3>
                        <p>Ergonómico, conexión Bluetooth, batería de larga duración</p>
                        <p class="price">$29.99</p>
                        <a href="{{ url('/products/2') }}" class="btn btn-primary">Ver Detalles</a>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image-card">
                        <img src="https://images.unsplash.com/photo-1587829741301-dc798b83add3?w=500&h=400&fit=crop"
                            alt="Teclado Mecánico RGB">
                    </div>
                    <div class="product-card-body">
                        <h3>Teclado Mecánico RGB</h3>
                        <p>Switches azules, retroiluminación personalizable</p>
                        <p class="price">$89.99</p>
                        <a href="{{ url('/products/3') }}" class="btn btn-primary">Ver Detalles</a>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image-card">
                        <img src="https://images.unsplash.com/photo-1527443224154-c4a3942d3acf?w=500&h=400&fit=crop"
                            alt="Monitor 27 4K">
                    </div>
                    <div class="product-card-body">
                        <h3>Monitor 27" 4K</h3>
                        <p>Panel IPS, 144Hz, HDR compatible</p>
                        <p class="price">$449.99</p>
                        <a href="{{ url('/products/4') }}" class="btn btn-primary">Ver Detalles</a>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image-card">
                        <img src="https://images.unsplash.com/photo-1588508065123-287b28e013da?w=500&h=400&fit=crop"
                            alt="Webcam HD">
                    </div>
                    <div class="product-card-body">
                        <h3>Webcam HD</h3>
                        <p>1080p, micrófono integrado, enfoque automático</p>
                        <p class="price">$59.99</p>
                        <a href="{{ url('/products/5') }}" class="btn btn-primary">Ver Detalles</a>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image-card">
                        <img src="https://images.unsplash.com/photo-1546435770-a3e426bf472b?w=500&h=400&fit=crop"
                            alt="Auriculares Gaming">
                    </div>
                    <div class="product-card-body">
                        <h3>Auriculares Gaming</h3>
                        <p>Sonido surround 7.1, micrófono cancelación de ruido</p>
                        <p class="price">$119.99</p>
                        <a href="{{ url('/products/6') }}" class="btn btn-primary">Ver Detalles</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <p>&copy; 2025 Mi Tienda. Todos los derechos reservados.</p>
    </div>
@endsection