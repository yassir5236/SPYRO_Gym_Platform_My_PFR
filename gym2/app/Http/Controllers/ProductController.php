<?php


namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    // public function index()
    // {
    //     $products = Product::all();
    //     $categories = Category::all();
    //     return view('admin.products.index', compact('products','categories'));
    // }

    public function index(Request $request)
    {
        $categoryId = $request->input('category_id');
        $products = $categoryId ? Product::where('category_id', $categoryId)->get() : Product::all();
        $categories = Category::all();
        return view('admin.products.index', compact('products', 'categories'));
    }


    public function indexProductClient(Request $request)
    {
        $categoryId = $request->input('category_id');
        $products = $categoryId ? Product::where('category_id', $categoryId)->get() : Product::all();
        $categories = Category::all();
        return view('clients.products.index', compact('products', 'categories'));
    }










    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('clients.products.detail', compact('product'));
    }






    public function create()
    {
        $categories = Category::all();
        // dd($categories);
        return view('admin.products.create', compact('categories'));
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
        return view('admin.products.edit', compact('product', 'categories'));
    }




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

        if ($request->hasFile('image_path')) {
            // Supprimer l'ancienne image si elle existe
            // if ($product->image_path) {
            //     Storage::delete($product->image_path);
            // }

            // Enregistrer la nouvelle image
            $imagePath = $request->file('image_path')->store('productss', 'public');
            $product->image_path = $imagePath;
        }

        $product->save();

        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }


    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Produit supprimé avec succès.');
    }


    // public function filter(Request $request)
    // {
    //     $categoryId = $request->input('category_id');
    //     $products = $categoryId ? Product::where('category_id', $categoryId)->get() : Product::all();
    //     $categories = Category::all(); // Assurez-vous de passer également les catégories à la vue
    //     return view('products.index', compact('products', 'categories'));
    // }



    // public function searchProductClient($searchinput)
    // {
    //     $search = 'Karleigh'; // Utiliser le nom correct du paramètre

    //     $products = Product::where('name', 'like', '%' . $search . '%')->get();

    //     return response()->json(['products'=>$products]);
    // }



    public function searchProductClient(Request $request)
    {
        // Récupérer le terme de recherche depuis la requête
        $search = $request->input('search');

        // Recherche des produits basée sur le terme de recherche
        $products = Product::where('name', 'like', '%' . $search . '%')->get();

        // Retourner les produits sous forme de réponse JSON
        return response()->json(['products' => $products]);
    }



    public function indexProductClient2(Request $request)
    {
        $categoryId = $request->input('category_id');
        $products = $categoryId ? Product::where('category_id', $categoryId)->get() : Product::all();
        $categories = Category::all();
        return response()->json(['products' => $products,'categories' => $categories]);

        // return view('clients.products.index', compact('products', 'categories'));
    }


//     public function indexProductClient2(Request $request)
// {
//     $categoryId = $request->input('category_id');
    
//     // Vérifiez si une catégorie a été sélectionnée
//     if ($categoryId) {
//         // Filtrer les produits par catégorie
//         $products = Product::where('category_id', $categoryId)->get();
//     } else {
//         // Si aucune catégorie n'est sélectionnée, retournez tous les produits
//         $products = Product::all();
//     }
    
//     // Retourner les produits sous forme de réponse JSON
//     return response()->json(['products' => $products]);
// }
}
