<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create(){
        return view('admin.category.create');
    }

    public function store(Request $request){
        //dd($request->all());

        Category::create([
            'name' => $request->get('name')
        ]);

        return "SE GUARDO BIEN";

    }

    public function table()
{
    $categories = Category::orderBy('id', 'desc')->paginate(10);

    return view('admin.category.table', [
        'categories' => $categories
    ]);
}

public function destroy($id)
{
    $category = Category::findOrFail($id);

    // Si la categoría tiene productos, no se puede eliminar
    if ($category->products()->count() > 0) {
        return redirect()->route('admin.category.table')
            ->with('error', 'No puedes eliminar una categoría con productos asociados.');
    }

    $category->delete();
    return redirect()->route('admin.category.table')->with('success', 'Categoría eliminada correctamente.');
}

}
