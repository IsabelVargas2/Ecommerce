@extends('layouts.app')


@section('content')
    <div class="container">
        <button class="back-btn" onclick="goBack()">← Volver a la lista</button>
        
        <div class="product-detail">
            <div class="product-header">
                <div class="product-gallery">
                    <div class="main-image" id="mainImage">🍞</div>
                    <div class="thumbnail-gallery">
                        <div class="thumbnail active">🍞</div>
                        <div class="thumbnail">📱</div>
                        <div class="thumbnail">⚙️</div>
                        <div class="thumbnail">📦</div>
                    </div>
                </div>
                
                <div class="product-info">
                    <div class="availability-badge">En Stock</div>
                    <h1 class="product-title" id="productTitle">Tostadora Premium Digital</h1>
                    <div class="product-brand" id="productBrand">KitchenPro</div>
                    
                    <div class="rating">
                        <div class="stars">⭐⭐⭐⭐⭐</div>
                        <span class="rating-text">(124 reseñas) | 4.8/5</span>
                    </div>
                    
                    <div class="product-price" id="productPrice">$289,900</div>
                    
                    <p class="product-description" id="productDescription">
                        Tostadora de 4 rebanadas con controles digitales precisos, 7 niveles de tostado y funciones especiales para bagels y descongelado. Diseño elegante en acero inoxidable que combina perfectamente con cualquier cocina moderna.
                    </p>
                    
                    <div class="quantity-selector">
                        <span class="quantity-label">Cantidad:</span>
                        <div class="quantity-controls">
                            <button class="quantity-btn" onclick="decreaseQuantity()">-</button>
                            <input type="number" class="quantity-input" value="1" min="1" max="10" id="quantity">
                            <button class="quantity-btn" onclick="increaseQuantity()">+</button>
                        </div>
                    </div>
                    
                    <div class="action-buttons">
                        <button class="btn btn-primary" onclick="addToCart()">Agregar al Carrito</button>
                        <button class="btn btn-secondary" onclick="addToWishlist()">♥ Favoritos</button>
                    </div>
                </div>
            </div>
            
            <div class="product-tabs">
                <div class="tab-buttons">
                    <button class="tab-button active" onclick="showTab('features')">Características</button>
                    <button class="tab-button" onclick="showTab('specifications')">Especificaciones</button>
                    <button class="tab-button" onclick="showTab('reviews')">Reseñas</button>
                </div>
                
                <div id="featuresTab" class="tab-content active">
                    <div class="features-grid" id="featuresGrid">
                        <div class="feature-item">
                            <div class="feature-icon">🔥</div>
                            <div class="feature-title">7 Niveles de Tostado</div>
                            <div class="feature-description">Desde ligeramente dorado hasta crujiente</div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">⚡</div>
                            <div class="feature-title">Controles Digitales</div>
                            <div class="feature-description">Pantalla LED con botones táctiles</div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-title">🛡️</div>
                            <div class="feature-title">Sistema Anti-Atascos</div>
                            <div class="feature-description">Levantamiento automático de rebanadas</div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">❄️</div>
                            <div class="feature-title">Función Descongelado</div>
                            <div class="feature-description">Perfecto para pan congelado</div>
                        </div>
                    </div>
                </div>
                
                <div id="specificationsTab" class="tab-content">
                    <div class="specifications-list" id="specificationsList">
                        <div class="spec-item">
                            <span class="spec-label">Dimensiones</span>
                            <span class="spec-value">35 x 25 x 22 cm</span>
                        </div>
                        <div class="spec-item">
                            <span class="spec-label">Peso</span>
                            <span class="spec-value">3.2 kg</span>
                        </div>
                        <div class="spec-item">
                            <span class="spec-label">Potencia</span>
                            <span class="spec-value">1400W</span>
                        </div>
                        <div class="spec-item">
                            <span class="spec-label">Material</span>
                            <span class="spec-value">Acero inoxidable</span>
                        </div>
                        <div class="spec-item">
                            <span class="spec-label">Capacidad</span>
                            <span class="spec-value">4 rebanadas</span>
                        </div>
                        <div class="spec-item">
                            <span class="spec-label">Garantía</span>
                            <span class="spec-value">2 años</span>
                        </div>
                    </div>
                </div>
                
                <div id="reviewsTab" class="tab-content">
                    <div class="reviews-summary">
                        <div class="reviews-header">
                            <h3>Reseñas de Clientes</h3>
                            <span class="rating">⭐ 4.8/5 (124 reseñas)</span>
                        </div>
                    </div>
                    
                    <div class="review-item">
                        <div class="review-header">
                            <div class="reviewer-avatar">M</div>
                            <div>
                                <strong>María González</strong>
                                <div class="stars">⭐⭐⭐⭐⭐</div>
                            </div>
                        </div>
                        <p>"Excelente tostadora, muy fácil de usar y el resultado es perfecto. El diseño es hermoso y la calidad se nota."</p>
                    </div>
                    
                    <div class="review-item">
                        <div class="review-header">
                            <div class="reviewer-avatar">C</div>
                            <div>
                                <strong>Carlos Pérez</strong>
                                <div class="stars">⭐⭐⭐⭐⭐</div>
                            </div>
                        </div>
                        <p>"La mejor inversión para mi cocina. Los controles digitales son muy precisos y el acero inoxidable se ve espectacular."</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection







  