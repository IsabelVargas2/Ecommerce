@extends('layouts.app')

<<<<<<< HEAD
@section('content')

    <h1>DETAIL OF PRODUCT:</h1>
@endsection
=======

@section('css')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 20px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .back-btn {
            background: rgba(255, 255, 255, 0.2);
            border: 2px solid rgba(255, 255, 255, 0.3);
            color: white;
            padding: 12px 24px;
            border-radius: 25px;
            cursor: pointer;
            font-weight: 500;
            margin-bottom: 30px;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }

        .back-btn:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: translateX(-5px);
        }

        .product-detail {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: 25px;
            overflow: hidden;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
            border: 1px solid rgba(255, 255, 255, 0.3);
            animation: slideUp 0.8s ease-out;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .product-header {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            padding: 40px;
        }

        .product-gallery {
            position: relative;
        }

        .main-image {
            width: 100%;
            height: 400px;
            background: linear-gradient(135deg, #f8fafc, #e2e8f0);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 8rem;
            margin-bottom: 20px;
            box-shadow: inset 0 4px 20px rgba(0, 0, 0, 0.1);
            position: relative;
            overflow: hidden;
        }

        .main-image::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, transparent 30%, rgba(255, 255, 255, 0.1) 50%, transparent 70%);
            animation: shimmer 4s infinite;
        }

        @keyframes shimmer {
            0% { transform: translateX(-100%); }
            100% { transform: translateX(100%); }
        }

        .thumbnail-gallery {
            display: flex;
            gap: 10px;
            justify-content: center;
        }

        .thumbnail {
            width: 60px;
            height: 60px;
            background: rgba(102, 126, 234, 0.1);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }

        .thumbnail:hover, .thumbnail.active {
            border-color: #667eea;
            background: rgba(102, 126, 234, 0.2);
            transform: scale(1.1);
        }

        .product-info {
            padding: 20px 0;
        }

        .availability-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(34, 197, 94, 0.1);
            color: #22c55e;
            padding: 8px 16px;
            border-radius: 25px;
            font-size: 0.9rem;
            font-weight: 500;
            margin-bottom: 20px;
            border: 1px solid rgba(34, 197, 94, 0.2);
        }

        .availability-badge::before {
            content: '●';
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.5; }
        }

        .product-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 10px;
            line-height: 1.2;
        }

        .product-brand {
            font-size: 1.1rem;
            color: #667eea;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 20px;
        }

        .rating {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 20px;
        }

        .stars {
            color: #fbbf24;
            font-size: 1.2rem;
        }

        .rating-text {
            color: #64748b;
            font-size: 0.9rem;
        }

        .product-price {
            font-size: 3rem;
            font-weight: 800;
            background: linear-gradient(135deg, #667eea, #764ba2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 25px;
        }

        .product-description {
            color: #64748b;
            line-height: 1.7;
            font-size: 1.1rem;
            margin-bottom: 30px;
        }

        .quantity-selector {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 30px;
        }

        .quantity-label {
            font-weight: 600;
            color: #374151;
        }

        .quantity-controls {
            display: flex;
            align-items: center;
            background: #f8fafc;
            border-radius: 12px;
            border: 2px solid #e2e8f0;
        }

        .quantity-btn {
            background: none;
            border: none;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            font-size: 1.2rem;
            color: #667eea;
            transition: all 0.2s ease;
        }

        .quantity-btn:hover {
            background: rgba(102, 126, 234, 0.1);
        }

        .quantity-input {
            width: 60px;
            text-align: center;
            border: none;
            background: none;
            font-size: 1rem;
            font-weight: 600;
            color: #374151;
        }

        .action-buttons {
            display: flex;
            gap: 15px;
            margin-bottom: 30px;
        }

        .btn {
            flex: 1;
            padding: 16px 24px;
            border: none;
            border-radius: 15px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 1rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .btn-primary {
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            box-shadow: 0 10px 25px rgba(102, 126, 234, 0.3);
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 35px rgba(102, 126, 234, 0.4);
        }

        .btn-secondary {
            background: rgba(100, 116, 139, 0.1);
            color: #64748b;
            border: 2px solid rgba(100, 116, 139, 0.2);
        }

        .btn-secondary:hover {
            background: rgba(100, 116, 139, 0.2);
            transform: translateY(-2px);
        }

        .product-tabs {
            border-top: 1px solid #e2e8f0;
            padding: 40px;
        }

        .tab-buttons {
            display: flex;
            gap: 20px;
            margin-bottom: 30px;
            border-bottom: 1px solid #e2e8f0;
        }

        .tab-button {
            background: none;
            border: none;
            padding: 15px 0;
            font-size: 1rem;
            font-weight: 600;
            color: #64748b;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
        }

        .tab-button.active {
            color: #667eea;
        }

        .tab-button.active::after {
            content: '';
            position: absolute;
            bottom: -1px;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            border-radius: 2px;
        }

        .tab-content {
            display: none;
            animation: fadeIn 0.5s ease;
        }

        .tab-content.active {
            display: block;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .feature-item {
            background: rgba(102, 126, 234, 0.05);
            border: 1px solid rgba(102, 126, 234, 0.1);
            border-radius: 12px;
            padding: 20px;
            text-align: center;
        }

        .feature-icon {
            font-size: 2rem;
            margin-bottom: 10px;
        }

        .feature-title {
            font-weight: 600;
            color: #374151;
            margin-bottom: 5px;
        }

        .feature-description {
            color: #64748b;
            font-size: 0.9rem;
        }

        .specifications-list {
            display: grid;
            gap: 15px;
        }

        .spec-item {
            display: flex;
            justify-content: space-between;
            padding: 15px 0;
            border-bottom: 1px solid #e2e8f0;
        }

        .spec-item:last-child {
            border-bottom: none;
        }

        .spec-label {
            font-weight: 600;
            color: #374151;
        }

        .spec-value {
            color: #64748b;
        }

        .reviews-summary {
            background: #f8fafc;
            border-radius: 15px;
            padding: 25px;
            margin-bottom: 25px;
        }

        .reviews-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .review-item {
            background: white;
            border-radius: 12px;
            padding: 20px;
            margin-bottom: 15px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        .review-header {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 10px;
        }

        .reviewer-avatar {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 600;
        }

        @media (max-width: 768px) {
            .product-header {
                grid-template-columns: 1fr;
                gap: 30px;
                padding: 30px 20px;
            }
            
            .main-image {
                height: 300px;
                font-size: 6rem;
            }
            
            .product-title {
                font-size: 2rem;
            }
            
            .product-price {
                font-size: 2.5rem;
            }
            
            .action-buttons {
                flex-direction: column;
            }
            
            .features-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
@endsection


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







  
>>>>>>> task
