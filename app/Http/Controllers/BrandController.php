<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function create()
    {
        return view('admin.brands.create');
    }

    public function store(Request $request)
    {
        Brand::create([
            'name' => $request->get('name')
        ]);

        return redirect()->route('admin.brands.table')->with('success', 'Marca creada correctamente.');
    }

    public function table()
    {
        $brands = Brand::orderBy('id', 'desc')->paginate(10);

        return view('admin.brands.table', [
            'brands' => $brands
        ]);
    }

    public function destroy($id)
{
    $brand = Brand::findOrFail($id);

    // Evita eliminar si tiene productos
    if ($brand->products()->count() > 0) {
        return redirect()->route('admin.brands.table')
            ->with('error', 'No se puede eliminar la marca porque tiene productos asociados.');
    }

    $brand->delete();

    return redirect()->route('admin.brands.table')
        ->with('success', 'Marca eliminada correctamente.');
}

}
