@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('css/create.css') }}">


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

<div class="product-form">
    <div class="form-container">
        <h1>Crear Nuevo Producto</h1>

        <form id="productForm" method="POST" enctype="multipart/form-data">
            @csrf
            
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
                <button type="button" class="btn btn-secondary" onclick="window.location.href='{{ url('/products') }}'">Cancelar</button>
                <button type="submit" class="btn btn-primary">Crear Producto</button>
            </div>
        </form>
    </div>
</div>

<div class="footer">
    <p>&copy; 2025 Mi Tienda. Todos los derechos reservados.</p>
</div>

<script>
    // Subcategorías por categoría
    const subcategories = {
        electrodomesticos: ['Refrigeración', 'Cocina', 'Lavado', 'Climatización', 'Pequeños Electrodomésticos'],
        juguetes: ['Muñecas y Peluches', 'Juegos de Mesa', 'Construcción', 'Vehículos', 'Educativos'],
        deportes: ['Fitness', 'Fútbol', 'Baloncesto', 'Natación', 'Ciclismo', 'Yoga'],
        hogar: ['Muebles', 'Decoración', 'Textiles', 'Iluminación', 'Organización'],
        tecnologia: ['Smartphones', 'Computadores', 'Audio', 'Cámaras', 'Accesorios'],
        ropa: ['Hombre', 'Mujer', 'Niños', 'Calzado', 'Accesorios'],
        libros: ['Ficción', 'No Ficción', 'Infantil', 'Educativos', 'Revistas'],
        belleza: ['Maquillaje', 'Cuidado de la Piel', 'Cabello', 'Fragancias', 'Manicura'],
        automotriz: ['Repuestos', 'Accesorios', 'Herramientas', 'Cuidado del Auto', 'Electrónica'],
        jardineria: ['Plantas', 'Herramientas', 'Fertilizantes', 'Macetas', 'Riego'],
        mascotas: ['Perros', 'Gatos', 'Aves', 'Peces', 'Accesorios'],
        alimentacion: ['Despensa', 'Bebidas', 'Snacks', 'Frescos', 'Congelados']
    };

    // Manejo de categorías y subcategorías
    const categorySelect = document.getElementById('category');
    const subcategoryGroup = document.getElementById('subcategoryGroup');
    const subcategorySelect = document.getElementById('subcategory');
    const categoryPreview = document.getElementById('categoryPreview');

    categorySelect.addEventListener('change', function() {
        const selectedCategory = this.value;
        
        if (selectedCategory && subcategories[selectedCategory]) {
            subcategoryGroup.classList.add('active');
            subcategorySelect.innerHTML = '<option value="">Selecciona una subcategoría...</option>';
            
            subcategories[selectedCategory].forEach(sub => {
                const option = document.createElement('option');
                option.value = sub.toLowerCase().replace(/ /g, '-');
                option.textContent = sub;
                subcategorySelect.appendChild(option);
            });
            
            categoryPreview.classList.add('active');
            categoryPreview.textContent = `Categoría seleccionada: ${this.options[this.selectedIndex].text}`;
        } else {
            subcategoryGroup.classList.remove('active');
            categoryPreview.classList.remove('active');
        }
    });

    // Manejo del archivo
    const fileInput = document.getElementById('image');
    const fileLabel = document.querySelector('.file-input-label');

    fileInput.addEventListener('change', function() {
        if (this.files && this.files[0]) {
            const fileName = this.files[0].name;
            fileLabel.innerHTML = `✅ ${fileName}<div style="font-size: 0.85rem; color: #888; margin-top: 5px;">Archivo seleccionado</div>`;
        }
    });

    // Manejo del formulario
    document.getElementById('productForm').addEventListener('submit', function(e) {
        e.preventDefault();
        alert('¡Producto creado exitosamente!');
        this.reset();
        subcategoryGroup.classList.remove('active');
        categoryPreview.classList.remove('active');
        fileLabel.innerHTML = '📁 Seleccionar imagen...<div style="font-size: 0.85rem; color: #888; margin-top: 5px;">Formatos soportados: JPG, PNG, GIF</div>';
    });
</script>

@endsection