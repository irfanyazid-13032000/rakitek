<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        return view("crud", ['title' => 'crud', 'products' => Product::all()]);
    }

    public function create()
    {
        return view('createcrud', ['title' => 'create crud', 'categories' => Category::all()]);
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_produk' => 'required',
            'harga' => 'required',
            'category_id' => 'required'
        ]);

        Product::create($validatedData);

        return redirect('crud');
    }


    public function edit($id)
    {
        $product = Product::find($id);

        return view('editcrud', ['product' => $product, 'categories' => Category::all(), 'title' => 'update']);
    }

    public function update($id, Request $request)
    {
        $validatedData = $request->validate([
            'nama_produk' => 'required',
            'harga' => 'required',
            'category_id' => 'required'
        ]);

        $product = Product::find($id);
        $product->update($request->except(['_token', 'submit']));


        return redirect('crud');
    }


    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect('crud');
        // return var_dump($id);
    }
}
