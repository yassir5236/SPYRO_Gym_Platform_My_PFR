<?php


namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }



    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }




    public function create()
    {
        $categories = Category::all();
        // dd($categories);
        return view('admin.products.create',compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
            'category_id' => 'required|exists:categories,id',
            'image_path' => 'nullable|image',
        ]);
    

        $imagePath = $request->file('image_path')->store('productss', 'public');

    
        // Créer le produit dans la base de données
        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'category_id' => $request->category_id,
            'image_path' => $imagePath,
        ]);
    
        // Rediriger avec un message de succès
        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }
    

    // Afficher le formulaire de modification d'un produit
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('admin.products.edit', compact('product','categories'));
    }

    // Mettre à jour un produit
    // public function update(Request $request, Product $product)
    // {
    //     $request->validate([
    //         'name' => 'required|string',
    //         'description' => 'nullable|string',
    //         'price' => 'required|numeric',
    //         'quantity' => 'required|integer',
    //         'category_id' => 'required|exists:categories,id',
    //         'image_path' => 'nullable|image',
    //     ]);

    //     $imagePath = $request->file('image_path')->store('productss', 'public');

    //     $product->update($request->all());

    //     return redirect()->route('products.index', $product)->with('success', 'Produit mis à jour avec succès.');
    // }


    public function update(Request $request, $id)
{
    // Valider les données du formulaire
    $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'price' => 'required|numeric|min:0',
        'quantity' => 'required|integer|min:0',
        'category_id' => 'required|exists:categories,id',
        'image_path' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Taille maximale de l'image de 2 Mo
    ]);

    // Trouver le produit à mettre à jour
    $product = Product::findOrFail($id);

    // Mettre à jour les attributs du produit
    $product->name = $request->name;
    $product->description = $request->description;
    $product->price = $request->price;
    $product->quantity = $request->quantity;
    $product->category_id = $request->category_id;

    // Vérifier si une nouvelle image a été téléchargée
    if ($request->hasFile('image_path')) {
        // Supprimer l'ancienne image si elle existe
        // if ($product->image_path) {
        //     Storage::delete($product->image_path);
        // }

        // Enregistrer la nouvelle image
        $imagePath = $request->file('image_path')->store('productss', 'public');
        $product->image_path = $imagePath;
    }

    // Enregistrer les modifications du produit
    $product->save();

    // Rediriger avec un message de succès
    return redirect()->route('products.index')->with('success', 'Product updated successfully.');
}


    // Supprimer un produit
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Produit supprimé avec succès.');
    }









  


}


