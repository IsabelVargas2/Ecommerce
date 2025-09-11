<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Catálogo de Productos</title>
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
            padding: 40px 20px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .header {
            text-align: center;
            margin-bottom: 50px;
            animation: fadeInDown 1s ease-out;
        }

        .header h1 {
            font-size: 3rem;
            font-weight: 700;
            color: white;
            text-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
            margin-bottom: 10px;
            background: linear-gradient(45deg, #fff, #f1f5f9);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .header p {
            font-size: 1.2rem;
            color: rgba(255, 255, 255, 0.9);
            font-weight: 300;
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
            margin-bottom: 40px;
        }

        .product-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: 20px;
            padding: 30px;
            box-shadow: 
                0 20px 40px rgba(0, 0, 0, 0.1),
                0 1px 3px rgba(0, 0, 0, 0.1);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border: 1px solid rgba(255, 255, 255, 0.3);
            position: relative;
            overflow: hidden;
            animation: fadeInUp 0.8s ease-out;
        }

        .product-card:nth-child(1) { animation-delay: 0.1s; }
        .product-card:nth-child(2) { animation-delay: 0.3s; }
        .product-card:nth-child(3) { animation-delay: 0.5s; }

        .product-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.6s;
        }

        .product-card:hover::before {
            left: 100%;
        }

        .product-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 
                0 30px 60px rgba(0, 0, 0, 0.15),
                0 5px 20px rgba(0, 0, 0, 0.1);
        }

        .product-image {
            width: 100%;
            height: 200px;
            background: linear-gradient(135deg, #f8fafc, #e2e8f0);
            border-radius: 15px;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 4rem;
            position: relative;
            overflow: hidden;
            box-shadow: inset 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .product-image::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, transparent 30%, rgba(255, 255, 255, 0.1) 50%, transparent 70%);
            animation: shimmer 3s infinite;
        }

        @keyframes shimmer {
            0% { transform: translateX(-100%); }
            100% { transform: translateX(100%); }
        }

        .product-title {
            font-size: 1.5rem;
            font-weight: 600;
            color: #1e293b;
            margin-bottom: 10px;
        }

        .product-brand {
            font-size: 0.9rem;
            color: #667eea;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 15px;
        }

        .product-description {
            color: #64748b;
            line-height: 1.6;
            margin-bottom: 20px;
            font-size: 0.95rem;
        }

        .product-price {
            font-size: 2rem;
            font-weight: 700;
            background: linear-gradient(135deg, #667eea, #764ba2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 25px;
        }

        .product-features {
            margin-bottom: 25px;
        }

        .product-features h4 {
            font-size: 0.9rem;
            color: #475569;
            margin-bottom: 10px;
            font-weight: 600;
        }

        .features-list {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }

        .feature-tag {
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.1), rgba(118, 75, 162, 0.1));
            color: #667eea;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 500;
            border: 1px solid rgba(102, 126, 234, 0.2);
        }

        .product-actions {
            display: flex;
            gap: 12px;
        }

        .btn {
            flex: 1;
            padding: 12px 20px;
            border: none;
            border-radius: 12px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .btn-primary {
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            box-shadow: 0 8px 20px rgba(102, 126, 234, 0.3);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 30px rgba(102, 126, 234, 0.4);
        }

        .btn-secondary {
            background: rgba(100, 116, 139, 0.1);
            color: #64748b;
            border: 2px solid rgba(100, 116, 139, 0.2);
        }

        .btn-secondary:hover {
            background: rgba(100, 116, 139, 0.2);
            border-color: rgba(100, 116, 139, 0.3);
        }

        .stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 40px;
            animation: fadeInUp 1s ease-out 0.8s both;
        }

        .stat-card {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 25px;
            text-align: center;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: 700;
            background: linear-gradient(135deg, #667eea, #764ba2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            display: block;
        }

        .stat-label {
            color: #64748b;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 0.9rem;
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 768px) {
            .header h1 {
                font-size: 2.5rem;
            }
            
            .products-grid {
                grid-template-columns: 1fr;
                gap: 25px;
            }
            
            .product-card {
                padding: 25px;
            }
            
            .product-actions {
                flex-direction: column;
            }
        }

        .availability {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(34, 197, 94, 0.1);
            color: #22c55e;
            padding: 8px 15px;
            border-radius: 25px;
            font-size: 0.85rem;
            font-weight: 500;
            margin-bottom: 15px;
            border: 1px solid rgba(34, 197, 94, 0.2);
        }

        .availability::before {
            content: '●';
            font-size: 1.2rem;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.5; }
        }
    </style>
</head>
<body>
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

        <div class="stats">
            <div class="stat-card">
                <span class="stat-number">3</span>
                <div class="stat-label">Productos Disponibles</div>
            </div>
            <div class="stat-card">
                <span class="stat-number">⭐ 4.8</span>
                <div class="stat-label">Calificación Promedio</div>
            </div>
            <div class="stat-card">
                <span class="stat-number">24h</span>
                <div class="stat-label">Envío Express</div>
            </div>
        </div>
    </div>

    <script>
        // Agregar interactividad a los botones
        document.querySelectorAll('.btn-primary').forEach(btn => {
            btn.addEventListener('click', function() {
                const productTitle = this.closest('.product-card').querySelector('.product-title').textContent;
                
                // Efecto visual de éxito
                this.textContent = '✓ Agregado';
                this.style.background = 'linear-gradient(135deg, #22c55e, #16a34a)';
                
                setTimeout(() => {
                    this.textContent = 'Agregar al Carrito';
                    this.style.background = 'linear-gradient(135deg, #667eea, #764ba2)';
                }, 2000);
                
                // Mostrar notificación
                showNotification(`${productTitle} agregado al carrito`);
            });
        });

        document.querySelectorAll('.btn-secondary').forEach(btn => {
            btn.addEventListener('click', function() {
                const productTitle = this.closest('.product-card').querySelector('.product-title').textContent;
                showNotification(`Mostrando detalles de ${productTitle}`);
            });
        });

        function showNotification(message) {
            // Crear notificación temporal
            const notification = document.createElement('div');
            notification.style.cssText = `
                position: fixed;
                top: 20px;
                right: 20px;
                background: rgba(34, 197, 94, 0.95);
                color: white;
                padding: 15px 25px;
                border-radius: 10px;
                font-weight: 500;
                z-index: 1000;
                animation: slideInRight 0.3s ease;
                box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            `;
            notification.textContent = message;
            
            document.body.appendChild(notification);
            
            setTimeout(() => {
                notification.style.animation = 'slideOutRight 0.3s ease';
                setTimeout(() => notification.remove(), 300);
            }, 3000);
        }

        // Agregar estilos CSS para las animaciones de notificación
        const style = document.createElement('style');
        style.textContent = `
            @keyframes slideInRight {
                from { transform: translateX(100%); opacity: 0; }
                to { transform: translateX(0); opacity: 1; }
            }
            @keyframes slideOutRight {
                from { transform: translateX(0); opacity: 1; }
                to { transform: translateX(100%); opacity: 0; }
            }
        `;
        document.head.appendChild(style);

        // Efecto de parallax sutil en scroll
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const cards = document.querySelectorAll('.product-card');
            
            cards.forEach((card, index) => {
                const speed = 0.5 + (index * 0.1);
                card.style.transform = `translateY(${scrolled * speed * 0.1}px)`;
            });
        });
    </script>
</body>
</html>