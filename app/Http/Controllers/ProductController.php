<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Product;

class ProductController extends Controller
{
    function index()
    {
        return view('products.index');
    }

    function detail($id, $category = null)
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

    function create()
    {
        $brands = Brand::all();
        $categories = Category::all();
        return view('products.create',[
            'brands' => $brands,
            'categories' => $categories
        ]);
    }


    function store(Request $request){
    
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'category' => 'required|exists:categories,id',
            'brand' => 'required|exists:brands,id'
        ]);

        $product = new Product();
        $product->name = $request->get('name');
        $product->description = $request->get('description');
        $product->price = $request->get('price');
        $product->category_id = $request->get('category');
        $product->brand_id = $request->get('brand');

        $product->save();

        return "SAVE PRODUCT!!!!!!";
    }

    public function table(){

        $products = Product::all();

        return view('products.table',[
            'products' => $products
        ]);
    }
}