<?php



namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // Afficher une catégorie


    public function index()
    {
        $categories = Category::all();
        // dd($categories);
        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {

        return view('admin.categories.create');

    }


    public function store(Request $request)
    {
        // Validation des données du formulaire
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Limitez le type et la taille de l'image
        ]);

        // Traitement de l'image téléchargée
        $imagePath = $request->file('image')->store('categories', 'public');

        // Création de la nouvelle instance de Category
        $category = new Category();
        $category->name = $request->name;
        $category->image_url = $imagePath; // Stockez le chemin de l'image dans la base de données
        $category->save();

        // Redirection avec un message de succès
        return redirect()->route('categories.index')->with('success', 'Le category a été créé avec succès.');
    }

 

 

    // Supprimer une catégorie
    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('categories.index')->with('success', 'Catégorie supprimée avec succès.');
    }
}
