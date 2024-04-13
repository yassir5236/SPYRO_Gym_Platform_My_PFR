<?php


namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Afficher un produit
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }


    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        // Logique de validation et de sauvegarde du produit
    }

    // Afficher le formulaire de modification d'un produit
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    // Mettre à jour un produit
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
            'category_id' => 'required|exists:categories,id',
        ]);

        $product->update($request->all());

        return redirect()->route('products.show', $product)->with('success', 'Produit mis à jour avec succès.');
    }

    // Supprimer un produit
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Produit supprimé avec succès.');
    }









  


}


