<?php



namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{


    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {

        return view('admin.categories.create');
    }





    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|',
        ]);

        $imagePath = $request->file('image')->store('categories', 'public');

        $category = new Category();
        $category->name = $request->name;
        $category->image_url = $imagePath; 
        $category->save();

        return redirect()->route('categories.index')->with('success', 'Le category a été créé avec succès.');
    }







    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }





    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|',
        ]);

        $category->name = $request->name;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('categories', 'public');
            $category->image_url = $imagePath;
        }

        $category->save();

        return redirect()->route('categories.index')->with('success', 'La catégorie a été mise à jour avec succès.');
    }


    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('categories.index')->with('success', 'Catégorie supprimée avec succès.');
    }
}
