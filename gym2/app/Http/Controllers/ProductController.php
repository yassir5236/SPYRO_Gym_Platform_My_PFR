<?php


namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;


class ProductController extends Controller
{
 

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


        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'category_id' => $request->category_id,
            'image_path' => $imagePath,
        ]);

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }


    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('admin.products.edit', compact('product', 'categories'));
    }




    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|integer|min:0',
            'category_id' => 'required|exists:categories,id',
            'image_path' => 'image|mimes:jpeg,png,jpg,gif|max:2048', 
        ]);

        $product = Product::findOrFail($id);

        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->category_id = $request->category_id;

        if ($request->hasFile('image_path')) {
         
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





    public function searchProductClient(Request $request)
    {
        $search = $request->input('search');

        $products = Product::where('name', 'like', '%' . $search . '%')->get();

        return response()->json(['products' => $products]);
    }



    public function indexProductClient2(Request $request)
    {
        $categoryId = $request->input('category_id');
        $products = $categoryId ? Product::where('category_id', $categoryId)->get() : Product::all();
        $categories = Category::all();
        return response()->json(['products' => $products,'categories' => $categories]);

        
    }



}
