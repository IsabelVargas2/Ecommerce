@extends('admin.layouts.app')

@section('content')
    <h2>Crear Nuevo Producto</h2>

    <div class="card">
        <div class="card-body">
            <form>
                <!-- Nombre del Producto -->
                <div class="input-group input-group-outline mb-3">
                    <label for="productName" class="form-label">Producto Name</label>
                    <input type="text" class="form-control" id="productName" name="name">
                </div>

                <!-- Descripción del Producto -->
                <div class="input-group input-group-outline mb-3">
                    <label for="productDescription" class="form-label">Descripción</label>
                    <textarea class="form-control" id="productDescription" name ="description" rows="3"></textarea>
                </div>


                <!-- Precio (COP) -->
                <div class="input-group input-group-outline mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" class="form-control" id="price" name="price" step="0.01" min="0"
                        required>
                </div>

                <!-- Categoría del Producto -->
                <div class="input-group input-group-outline mb-3">
                    <select class="form-control" id="productCategory">
                        <option value="" selected disabled>-- Category --</option>
                        @foreach ($categories as $item)
                            <option value="{{ $item->id }}">{{ $item->name}}</option>
                        @endforeach
                    </select>
                </div>
                <!-- Imagen del Producto -->
               <!--  <div class="mb-3">
                    <label for="image" class="form-label">Imagen del Producto</label>
                    <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
                </div> -->
                <!-- Marca -->
                <div class="input-group input-group-outline mb-3">
                    <select class="form-control" id="productBrand">
                        <option value="" selected disabled>-- Brand --</option>
                        @foreach ($brands as $item)
                            <option value="{{ $item->id }}">{{ $item->name}}</option>
                        @endforeach
                    </select>
                </div>
                <!-- Marca -->
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Create Product</button>
                </div>
            </form>
        </div>
    </div>
@endsection
