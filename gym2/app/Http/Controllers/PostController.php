<?php
namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('coach.post.index', compact('posts'));
    }

    public function create()
    {
        return view('coach.post.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|', // Validation de l'image
        ]);
    
        // Téléchargement de l'image
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
        }
    
        // Création de l'annonce avec l'image
        $post = new Post([
            'title' => $request->get('title'),
            'content' => $request->get('content'),
            'image' => $imageName, // Nom de l'image
            'user_id' => auth()->id(),
        ]);
        $post->save();
    
        return redirect()->route('posts.index');
    }
    

    public function edit(Post $post)
    {
        return view('coach.post.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|', // Validation de l'image
        ]);
    
        $post = Post::findOrFail($id);
    
        // Téléchargement de la nouvelle image si elle est fournie
        if ($request->hasFile('image')) {

            // Téléchargement de la nouvelle image
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
    
            // Mise à jour de l'image du post
            $post->image = $imageName;
        }
    
        // Mise à jour des autres champs du post
        $post->title = $request->get('title');
        $post->content = $request->get('content');
        $post->save();
    
        return redirect()->route('posts.index')->with('success', 'Post mis à jour avec succès.');
    }
    

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index');
    }
}
