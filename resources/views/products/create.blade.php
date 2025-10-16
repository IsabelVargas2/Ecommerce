@extends('layouts.app')


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



