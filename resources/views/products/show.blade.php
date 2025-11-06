@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('css/show.css') }}">


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

<div class="product-detail">
    <div class="detail-container">
        <a href="#products" class="back-link">← Volver a productos</a>
        
        <div class="product-content">
            <div class="product-image">
                <img src="https://images.unsplash.com/photo-1496181133206-80ce9b88a853?w=800&h=800&fit=crop" alt="Laptop Pro 15">
                <!-- Si no quieres imagen, usa esto: -->
                <!-- <span style="color: #999; font-size: 18px;">Imagen del Producto</span> -->
            </div>
            
            <div class="product-info">
                <h2>Laptop Pro 15</h2>
                
                <div class="product-price">$1,299.99</div>
                
                <div class="product-meta">
                    <p><strong>Categoría:</strong> Computadoras</p>
                    <p><strong>Marca:</strong> TechPro</p>
                    <p><strong>SKU:</strong> LAP-PRO-15-001</p>
                    <p><strong>Disponibilidad:</strong> <span class="stock-badge stock-available">En Stock (25 unidades)</span></p>
                </div>
                
                <div class="product-description">
                    <h3>Descripción</h3>
                    <p>Laptop profesional de alta gama con procesador Intel Core i7 de última generación, 16GB de memoria RAM DDR4 y disco sólido SSD de 512GB para un rendimiento excepcional en todas tus tareas.</p>
                    
                    <h3>Características Principales</h3>
                    <ul>
                        <li>Procesador Intel Core i7 (11ª generación)</li>
                        <li>16GB RAM DDR4</li>
                        <li>512GB SSD NVMe</li>
                        <li>Pantalla Full HD 15.6" IPS</li>
                        <li>Tarjeta gráfica integrada Intel Iris Xe</li>
                        <li>Batería de larga duración (hasta 10 horas)</li>
                        <li>Sistema operativo Windows 11 Pro</li>
                        <li>Puertos: 2x USB-C, 2x USB-A, HDMI, Jack 3.5mm</li>
                        <li>Peso: 1.8 kg</li>
                    </ul>
                </div>
                
                <div class="product-actions">
                    <button class="btn btn-primary" onclick="alert('¡Producto añadido al carrito!')">🛒 Añadir al Carrito</button>
                    <button class="btn btn-secondary" onclick="alert('¡Añadido a favoritos!')">♥ Favoritos</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="footer">
    <p>&copy; 2025 Mi Tienda. Todos los derechos reservados.</p>
</div>
@endsection