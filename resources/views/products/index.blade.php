@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="header">
            <h1>Catálogo de Productos</h1>
            <p>Descubre nuestra selección premium de productos</p>
        </div>
    <div class="products-grid">
            <!-- Tostadora -->
            <div class="product-card">
                <div class="product-image">🍞</div>
                <div class="availability">En Stock</div>
                <h2 class="product-title">Tostadora Premium Digital</h2>
                <div class="product-brand">KitchenPro</div>
                <p class="product-description">
                    Tostadora de 4 rebanadas con controles digitales precisos, 
                    7 niveles de tostado y funciones especiales para bagels y descongelado. 
                    Diseño elegante en acero inoxidable.
                </p>
                <div class="product-price">$289,900</div>
                <div class="product-features">
                    <h4>Características:</h4>
                    <div class="features-list">
                        <span class="feature-tag">4 Rebanadas</span>
                        <span class="feature-tag">Digital</span>
                        <span class="feature-tag">Acero Inoxidable</span>
                        <span class="feature-tag">7 Niveles</span>
                        <span class="feature-tag">Anti-Atascos</span>
                    </div>
                </div>
                <div class="product-actions">
                    <button class="btn btn-primary">Agregar al Carrito</button>
                    <button class="btn btn-secondary">Ver Detalles</button>
                </div>
            </div>

            <!-- LEGO Botánica -->
            <div class="product-card">
                <div class="product-image">🌱</div>
                <div class="availability">En Stock</div>
                <h2 class="product-title">LEGO Botánica - Ramo de Flores</h2>
                <div class="product-brand">LEGO Creator</div>
                <p class="product-description">
                    Set de construcción LEGO para adultos que incluye hermosas flores artificiales 
                    como rosas, lirios y gerberas. Perfecto para decoración del hogar y relajación.
                </p>
                <div class="product-price">$189,900</div>
                <div class="product-features">
                    <h4>Características:</h4>
                    <div class="features-list">
                        <span class="feature-tag">756 Piezas</span>
                        <span class="feature-tag">Para Adultos</span>
                        <span class="feature-tag">Decorativo</span>
                        <span class="feature-tag">Relajante</span>
                        <span class="feature-tag">Coleccionable</span>
                    </div>
                </div>
                <div class="product-actions">
                    <button class="btn btn-primary">Agregar al Carrito</button>
                    <button class="btn btn-secondary">Ver Detalles</button>
                </div>
            </div>

            <!-- Termo Owala -->
            <div class="product-card">
                <div class="product-image">🥤</div>
                <div class="availability">En Stock</div>
                <h2 class="product-title">Termo Owala FreeSip 24oz</h2>
                <div class="product-brand">Owala</div>
                <p class="product-description">
                    Botella de agua con doble pared de acero inoxidable que mantiene bebidas 
                    frías por 24 horas y calientes por 12 horas. Incluye pajilla integrada y tapa flip.
                </p>
                <div class="product-price">$159,900</div>
                <div class="product-features">
                    <h4>Características:</h4>
                    <div class="features-list">
                        <span class="feature-tag">24oz (710ml)</span>
                        <span class="feature-tag">Doble Pared</span>
                        <span class="feature-tag">Sin BPA</span>
                        <span class="feature-tag">Pajilla Integrada</span>
                        <span class="feature-tag">A Prueba de Fugas</span>
                    </div>
                </div>
                <div class="product-actions">
                    <button class="btn btn-primary">Agregar al Carrito</button>
                    <button class="btn btn-secondary">Ver Detalles</button>
                </div>
            </div>
        </div>
@endsection



    
