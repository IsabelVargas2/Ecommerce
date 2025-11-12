<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Muestra la lista de productos, con opción de filtrar por categoría.
     */
    public function index(Request $request)
    {
    $categoryId = $request->get('category'); // obtiene el filtro desde el formulario
    $categories = Category::all();

    if ($categoryId) {
        $products = Product::where('category_id', $categoryId)->get();
    } else {
        $products = Product::all();
    }

    return view('products.index', compact('products', 'categories', 'categoryId'));
}


    /**
     * Muestra el detalle de un producto.
     */
    public function detail($id, $category = null)
    {
        if ($category != null) {
            return view("products.detail", [
                'id' => $id,
                'category' => $category
            ]);
        } else {
            $category = "";
            return view("products.detail", compact('id', 'category'));
        }
    }

    /**
     * Muestra el formulario para crear un nuevo producto.
     */
    public function create()
    {
        $brands = Brand::all();
        $categories = Category::all();

        return view('products.create', [
            'brands' => $brands,
            'categories' => $categories
        ]);
    }

    /**
     * Guarda un nuevo producto en la base de datos.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0|max:999999.99',
            'category' => 'required|exists:category,id',
            'brand' => 'required|exists:brand,id',
        ]);

        $product = new Product();
        $product->name = $request->get('name');
        $product->description = $request->get('description');
        $product->price = $request->get('price');
        $product->category_id = $request->get('category');
        $product->brand_id = $request->get('brand');

        $product->image_url = 'https://images.unsplash.com/photo-1587829741301-dc798b83add3?w=500&h=400&fit=crop';

        $product->save();

        return redirect()->route('admin.products.table')->with('success', 'Producto creado correctamente.');

        if (!$request->has('image_url')) {
    $data['image_url'] = 'https://via.placeholder.com/500x400?text=Producto';
}

    }

    /**
     * Muestra la tabla de productos (panel de administración).
     */
    public function table()
    {
        $products = Product::orderBy('id', 'desc')->paginate(10);

        return view('products.table', [
            'products' => $products
        ]);
    }

    /**
     * Elimina un producto por ID.
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('admin.products.table')->with('success', 'Producto eliminado correctamente.');
    }
}
