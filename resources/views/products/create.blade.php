@extends('layouts.app')

@section('css')
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
@endsection

@section('content')
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

@endsection



