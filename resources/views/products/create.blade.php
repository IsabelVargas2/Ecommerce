<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Nuevo Producto</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .form-container {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
            animation: slideIn 0.6s ease-out;
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
            font-size: 1.8rem;
            font-weight: 600;
            position: relative;
        }

        h1::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            border-radius: 2px;
        }

        .form-group {
            margin-bottom: 25px;
            position: relative;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
            font-weight: 500;
            font-size: 0.95rem;
            transition: color 0.3s ease;
        }

        input, textarea, select {
            width: 100%;
            padding: 15px;
            border: 2px solid #e0e0e0;
            border-radius: 12px;
            font-size: 1rem;
            font-family: inherit;
            transition: all 0.3s ease;
            background: rgba(255, 255, 255, 0.8);
        }

        input:focus, textarea:focus, select:focus {
            outline: none;
            border-color: #667eea;
            background: white;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
            transform: translateY(-2px);
        }

        select {
            cursor: pointer;
            appearance: none;
            background-image: url('data:image/svg+xml;utf8,<svg fill="%23667eea" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M7 10l5 5 5-5z"/></svg>');
            background-repeat: no-repeat;
            background-position: right 12px center;
            background-size: 20px;
            padding-right: 45px;
        }

        select option {
            padding: 10px;
            background: white;
            color: #333;
        }

        textarea {
            resize: vertical;
            min-height: 100px;
            font-family: inherit;
        }

        .file-input-wrapper {
            position: relative;
            overflow: hidden;
            display: inline-block;
            width: 100%;
        }

        input[type="file"] {
            opacity: 0;
            position: absolute;
            left: -9999px;
        }

        .file-input-label {
            display: block;
            padding: 15px;
            border: 2px dashed #667eea;
            border-radius: 12px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
            background: rgba(102, 126, 234, 0.05);
            color: #667eea;
            font-weight: 500;
        }

        .file-input-label:hover {
            background: rgba(102, 126, 234, 0.1);
            border-color: #5a67d8;
            transform: translateY(-2px);
        }

        .category-selector {
            position: relative;
        }

        .category-icon {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 1.2rem;
            color: #667eea;
            z-index: 1;
        }

        .category-selector select {
            padding-left: 45px;
        }

        .category-preview {
            display: none;
            margin-top: 10px;
            padding: 10px 15px;
            background: rgba(102, 126, 234, 0.1);
            border-radius: 8px;
            border-left: 4px solid #667eea;
            font-size: 0.9rem;
            color: #555;
        }

        .btn-container {
            display: flex;
            gap: 15px;
            margin-top: 35px;
        }

        .btn {
            flex: 1;
            padding: 15px 25px;
            border: none;
            border-radius: 12px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .btn-primary {
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(102, 126, 234, 0.3);
        }

        .btn-secondary {
            background: transparent;
            color: #667eea;
            border: 2px solid #667eea;
        }

        .btn-secondary:hover {
            background: #667eea;
            color: white;
            transform: translateY(-3px);
        }

        @media (max-width: 600px) {
            .form-container {
                padding: 30px 20px;
                margin: 10px;
            }
            
            h1 {
                font-size: 1.5rem;
            }
            
            .btn-container {
                flex-direction: column;
            }
        }

        /* Animaciones adicionales */
        .form-group {
            animation: fadeInUp 0.6s ease-out;
            animation-fill-mode: both;
        }

        .form-group:nth-child(1) { animation-delay: 0.1s; }
        .form-group:nth-child(2) { animation-delay: 0.2s; }
        .form-group:nth-child(3) { animation-delay: 0.3s; }
        .form-group:nth-child(4) { animation-delay: 0.4s; }
        .form-group:nth-child(5) { animation-delay: 0.5s; }
        .form-group:nth-child(6) { animation-delay: 0.6s; }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Efecto de validación visual */
        .form-group.valid input,
        .form-group.valid textarea,
        .form-group.valid select {
            border-color: #10b981;
            box-shadow: 0 0 0 3px rgba(16, 185, 129, 0.1);
        }

        .form-group.invalid input,
        .form-group.invalid textarea,
        .form-group.invalid select {
            border-color: #ef4444;
            box-shadow: 0 0 0 3px rgba(239, 68, 68, 0.1);
        }

        /* Estilos para subcategorías */
        .subcategory-group {
            margin-top: 15px;
            display: none;
            animation: slideDown 0.3s ease;
        }

        .subcategory-group.show {
            display: block;
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                max-height: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                max-height: 200px;
                transform: translateY(0);
            }
        }

        .category-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-top: 10px;
        }

        .category-tag {
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.1), rgba(118, 75, 162, 0.1));
            color: #667eea;
            padding: 5px 12px;
            border-radius: 15px;
            font-size: 0.8rem;
            font-weight: 500;
            border: 1px solid rgba(102, 126, 234, 0.2);
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Crear Nuevo Producto</h1>

        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Nombre del Producto</label>
                <input type="text" id="name" name="name" placeholder="Ingresa el nombre del producto" required>
            </div>

            <div class="form-group">
                <label for="category">Categoría del Producto</label>
                <div class="category-selector">
                    <span class="category-icon">🏷️</span>
                    <select id="category" name="category" required>
                        <option value="">Selecciona una categoría...</option>
                        <option value="electrodomesticos">🏠 Electrodomésticos</option>
                        <option value="juguetes">🧸 Juguetes y Hobbies</option>
                        <option value="deportes">⚽ Deportes y Fitness</option>
                        <option value="hogar">🛋️ Hogar y Decoración</option>
                        <option value="tecnologia">📱 Tecnología</option>
                        <option value="ropa">👕 Ropa y Accesorios</option>
                        <option value="libros">📚 Libros y Educación</option>
                        <option value="belleza">💄 Belleza y Cuidado Personal</option>
                        <option value="automotriz">🚗 Automotriz</option>
                        <option value="jardineria">🌱 Jardinería</option>
                        <option value="mascotas">🐕 Mascotas</option>
                        <option value="alimentacion">🍎 Alimentación</option>
                    </select>
                </div>
                
                <div class="subcategory-group" id="subcategoryGroup">
                    <label for="subcategory">Subcategoría</label>
                    <select id="subcategory" name="subcategory">
                        <option value="">Selecciona una subcategoría...</option>
                    </select>
                </div>

                <div class="category-preview" id="categoryPreview"></div>
            </div>

            <div class="form-group">
                <label for="description">Descripción</label>
                <textarea id="description" name="description" placeholder="Describe las características principales del producto..." required></textarea>
            </div>

            <div class="form-group">
                <label for="price">Precio (COP)</label>
                <input type="number" id="price" name="price" placeholder="0.00" step="0.01" min="0" required>
            </div>

            <div class="form-group">
                <label for="image">Imagen del Producto</label>
                <div class="file-input-wrapper">
                    <input type="file" id="image" name="image" accept="image/*" required>
                    <label for="image" class="file-input-label">
                        📁 Seleccionar imagen...
                        <div style="font-size: 0.85rem; color: #888; margin-top: 5px;">
                            Formatos soportados: JPG, PNG, GIF
                        </div>
                    </label>
                </div>
            </div>

            <div class="form-group">
                <label for="brand">Marca</label>
                <input type="text" id="brand" name="brand" placeholder="Nombre de la marca" required>
            </div>

            <div class="btn-container">
                <button type="button" class="btn btn-secondary">Cancelar</button>
                <button type="submit" class="btn btn-primary">Crear Producto</button>
            </div>
        </form>
    </div>

    <script>
        // Base de datos de subcategorías
        const subcategories = {
            'electrodomesticos': [
                'Cocina (Hornos, Refrigeradores, Microondas)',
                'Lavandería (Lavadoras, Secadoras)',
                'Climatización (Aires Acondicionados, Ventiladores)',
                'Pequeños Electrodomésticos (Licuadoras, Tostadoras, Cafeteras)',
                'Limpieza (Aspiradoras, Vaporeras)'
            ],
            'juguetes': [
                'Construcción (LEGO, Bloques)',
                'Muñecas y Figuras de Acción',
                'Juegos de Mesa',
                'Electrónicos y Interactivos',
                'Educativos y STEM',
                'Deportivos y Exteriores'
            ],
            'deportes': [
                'Fitness y Gimnasio',
                'Deportes Acuáticos',
                'Ciclismo',
                'Running y Atletismo',
                'Deportes de Equipo',
                'Yoga y Pilates'
            ],
            'hogar': [
                'Muebles',
                'Decoración',
                'Textiles (Cortinas, Cojines)',
                'Iluminación',
                'Organización y Almacenamiento',
                'Cocina y Comedor'
            ],
            'tecnologia': [
                'Smartphones y Tablets',
                'Computadoras y Laptops',
                'Audio y Video',
                'Gaming',
                'Accesorios Tecnológicos',
                'Smart Home'
            ],
            'ropa': [
                'Hombre',
                'Mujer',
                'Niños',
                'Calzado',
                'Accesorios',
                'Ropa Deportiva'
            ],
            'libros': [
                'Ficción',
                'No Ficción',
                'Educativo',
                'Infantil',
                'Cómics y Manga',
                'Audiolibros'
            ],
            'belleza': [
                'Maquillaje',
                'Cuidado de la Piel',
                'Cuidado del Cabello',
                'Fragancias',
                'Herramientas de Belleza',
                'Cuidado Corporal'
            ],
            'automotriz': [
                'Accesorios para Auto',
                'Herramientas',
                'Cuidado del Vehículo',
                'Repuestos',
                'Electrónicos para Auto'
            ],
            'jardineria': [
                'Plantas y Semillas',
                'Herramientas de Jardín',
                'Macetas y Contenedores',
                'Fertilizantes y Suelos',
                'Decoración de Jardín'
            ],
            'mascotas': [
                'Alimentos',
                'Juguetes para Mascotas',
                'Cuidado e Higiene',
                'Accesorios',
                'Salud y Medicamentos'
            ],
            'alimentacion': [
                'Alimentos Frescos',
                'Conservas y Enlatados',
                'Bebidas',
                'Snacks y Dulces',
                'Productos Orgánicos',
                'Suplementos'
            ]
        };

        // Categorías con sus descripciones
        const categoryDescriptions = {
            'electrodomesticos': 'Productos para el hogar que facilitan las tareas domésticas',
            'juguetes': 'Entretenimiento y diversión para todas las edades',
            'deportes': 'Equipamiento para actividad física y recreación',
            'hogar': 'Productos para decorar y organizar tu espacio',
            'tecnologia': 'Dispositivos y gadgets tecnológicos modernos',
            'ropa': 'Vestimenta y accesorios de moda',
            'libros': 'Literatura, educación y entretenimiento escrito',
            'belleza': 'Productos para el cuidado personal y estética',
            'automotriz': 'Accesorios y cuidado para vehículos',
            'jardineria': 'Todo para el cuidado de plantas y jardines',
            'mascotas': 'Productos para el bienestar de tus mascotas',
            'alimentacion': 'Productos comestibles y bebidas'
        };

        // Manejar cambio de categoría
        document.getElementById('category').addEventListener('change', function() {
            const category = this.value;
            const subcategoryGroup = document.getElementById('subcategoryGroup');
            const subcategorySelect = document.getElementById('subcategory');
            const categoryPreview = document.getElementById('categoryPreview');

            // Limpiar subcategorías
            subcategorySelect.innerHTML = '<option value="">Selecciona una subcategoría...</option>';

            if (category && subcategories[category]) {
                // Mostrar grupo de subcategorías
                subcategoryGroup.classList.add('show');
                
                // Llenar subcategorías
                subcategories[category].forEach(sub => {
                    const option = document.createElement('option');
                    option.value = sub.toLowerCase().replace(/\s+/g, '-');
                    option.textContent = sub;
                    subcategorySelect.appendChild(option);
                });

                // Mostrar preview de categoría
                categoryPreview.style.display = 'block';
                categoryPreview.innerHTML = `
                    <strong>Categoría seleccionada:</strong> ${this.options[this.selectedIndex].text}<br>
                    <em>${categoryDescriptions[category]}</em>
                `;
            } else {
                subcategoryGroup.classList.remove('show');
                categoryPreview.style.display = 'none';
            }
        });

        // Efecto de validación en tiempo real
        const inputs = document.querySelectorAll('input, textarea, select');
        
        inputs.forEach(input => {
            input.addEventListener('blur', function() {
                const formGroup = this.closest('.form-group');
                if (this.value.trim()) {
                    formGroup.classList.add('valid');
                    formGroup.classList.remove('invalid');
                } else if (this.required) {
                    formGroup.classList.add('invalid');
                    formGroup.classList.remove('valid');
                }
            });
        });

        // Actualizar label del archivo seleccionado
        document.getElementById('image').addEventListener('change', function() {
            const label = document.querySelector('.file-input-label');
            if (this.files && this.files[0]) {
                label.innerHTML = `
                    ✅ ${this.files[0].name}
                    <div style="font-size: 0.85rem; color: #10b981; margin-top: 5px;">
                        Archivo seleccionado correctamente
                    </div>
                `;
            }
        });

        // Prevenir envío del formulario para demo
        document.querySelector('form').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Obtener datos del formulario
            const formData = new FormData(this);
            const productData = {
                name: formData.get('name'),
                category: formData.get('category'),
                subcategory: formData.get('subcategory'),
                description: formData.get('description'),
                price: formData.get('price'),
                brand: formData.get('brand'),
                image: formData.get('image')?.name || 'No file selected'
            };

            // Mostrar resumen del producto
            let summary = `¡Producto creado exitosamente!\n\n`;
            summary += `📦 Nombre: ${productData.name}\n`;
            summary += `🏷️ Categoría: ${document.getElementById('category').options[document.getElementById('category').selectedIndex]?.text}\n`;
            if (productData.subcategory) {
                summary += `📋 Subcategoría: ${document.getElementById('subcategory').options[document.getElementById('subcategory').selectedIndex]?.text}\n`;
            }
            summary += `💰 Precio: $${productData.price}\n`;
            summary += `🏭 Marca: ${productData.brand}\n`;
            summary += `📄 Descripción: ${productData.description.substring(0, 100)}...\n`;
            summary += `🖼️ Imagen: ${productData.image}`;

            alert(summary);
        });

        // Botón cancelar
        document.querySelector('.btn-secondary').addEventListener('click', function() {
            if (confirm('¿Estás seguro de que deseas cancelar?')) {
                document.querySelector('form').reset();
                
                // Limpiar validaciones
                document.querySelectorAll('.form-group').forEach(group => {
                    group.classList.remove('valid', 'invalid');
                });
                
                // Ocultar subcategorías y preview
                document.getElementById('subcategoryGroup').classList.remove('show');
                document.getElementById('categoryPreview').style.display = 'none';
                
                // Resetear label del archivo
                document.querySelector('.file-input-label').innerHTML = `
                    📁 Seleccionar imagen...
                    <div style="font-size: 0.85rem; color: #888; margin-top: 5px;">
                        Formatos soportados: JPG, PNG, GIF
                    </div>
                `;
            }
        });

        // Agregar sugerencias de categoría basadas en el nombre del producto
        document.getElementById('name').addEventListener('input', function() {
            const productName = this.value.toLowerCase();
            const categorySelect = document.getElementById('category');
            
            // Palabras clave para sugerencias automáticas
            const keywords = {
                'electrodomesticos': ['tostadora', 'microondas', 'refrigerador', 'lavadora', 'horno', 'licuadora', 'cafetera'],
                'juguetes': ['lego', 'muñeca', 'juguete', 'puzzle', 'figura'],
                'deportes': ['pelota', 'bicicleta', 'pesas', 'termo', 'botella', 'fitness'],
                'tecnologia': ['smartphone', 'laptop', 'tablet', 'auriculares', 'cable', 'cargador'],
                'hogar': ['mesa', 'silla', 'lámpara', 'cortina', 'cojín'],
                'ropa': ['camisa', 'pantalón', 'zapatos', 'vestido', 'chaqueta'],
                'belleza': ['crema', 'maquillaje', 'perfume', 'champú'],
                'automotriz': ['llanta', 'aceite', 'filtro', 'batería'],
                'jardineria': ['planta', 'semilla', 'maceta', 'fertilizante'],
                'mascotas': ['comida para perro', 'collar', 'juguete para gato'],
                'alimentacion': ['cereal', 'bebida', 'snack', 'conserva']
            };

            // Buscar coincidencias
            for (const [category, words] of Object.entries(keywords)) {
                if (words.some(keyword => productName.includes(keyword))) {
                    // Sugerencia visual sutil
                    const option = categorySelect.querySelector(`option[value="${category}"]`);
                    if (option) {
                        option.style.background = 'rgba(102, 126, 234, 0.1)';
                        setTimeout(() => {
                            option.style.background = '';
                        }, 3000);
                    }
                    break;
                }
            }
        });
    </script>
</body>
</html>