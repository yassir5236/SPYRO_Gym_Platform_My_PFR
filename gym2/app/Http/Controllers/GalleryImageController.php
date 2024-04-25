<?php
namespace App\Http\Controllers;

use App\Models\GalleryImage;
use Illuminate\Http\Request;

// class GalleryImageController extends Controller
// {
   
//     public function index()
//     {
//         $images = GalleryImage::all();
//         return view('galery', compact('images'));
//     }

  



//     public function create()
//     {
//         return view('admin.galery.create');
//     }

  


//     public function store(Request $request)
//     {
//         // Validez les données du formulaire
//         $validatedData = $request->validate([
//             'file_name' => 'required|string',
//             'path' => 'required|string',
//         ]);

//         // Créez une nouvelle image de la galerie
//         GalleryImage::create($validatedData);

//         return redirect()->route('gallery-images.index')
//             ->with('success', 'Image ajoutée avec succès.');
//     }

  


//     public function show(GalleryImage $galleryImage)
//     {
//         return view('gallery.show', compact('galleryImage'));
//     }

  


//     public function edit(GalleryImage $galleryImage)
//     {
//         return view('gallery.edit', compact('galleryImage'));
//     }

 


//     public function update(Request $request, GalleryImage $galleryImage)
//     {
//         // Validez les données du formulaire
//         $validatedData = $request->validate([
//             'file_name' => 'required|string',
//             'path' => 'required|string',
//         ]);

//         // Mettez à jour les informations de l'image de la galerie
//         $galleryImage->update($validatedData);

//         return redirect()->route('gallery-images.index')
//             ->with('success', 'Image mise à jour avec succès.');
//     }

  


//     public function destroy(GalleryImage $galleryImage)
//     {
//         // Supprimez l'image de la galerie
//         $galleryImage->delete();

//         return redirect()->route('gallery-images.index')
//             ->with('success', 'Image supprimée avec succès.');
//     }
// }





namespace App\Http\Controllers;

use App\Models\GalleryImage;
use Illuminate\Http\Request;

class GalleryImageController extends Controller
{


    public function index()
    {
        $galleryImages = GalleryImage::all();
        // dd($galleryImages);
    
        return view('galery', compact('galleryImages'));
    }




    public function create()
    {
        return view('admin.galery.create');
    }




    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'file_name' => 'required|string',
    //         'path' => 'required|string',
    //     ]);

    //     // Enregistrement de l'image dans le système de fichiers
    //     $imageName = time().'.'.$request->image->extension();
    //     $request->image->move(public_path('images'), $imageName);

    //     // Création d'une nouvelle instance de GalleryImage
    //     $galleryImage = new GalleryImage();
    //     $galleryImage->image_path = $imageName;
    //     // Assigner d'autres données du formulaire à votre modèle GalleryImage

    //     // Enregistrement de l'image dans la base de données
    //     $galleryImage->save();

    //     return redirect()->route('gallery-images.index')->with('success', 'Image ajoutée avec succès.');
    // }

    public function store(Request $request)
    {
        // Valider les données du formulaire
        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif|', 
            // 'path' => 'required|string',

        ]);

        // Vérifier si un fichier a été téléchargé
        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $imageName = $image->getClientOriginalName();
            $imagePath = $image->storeAs('gallery_images', $imageName, 'public'); // Enregistrer l'image dans le stockage public

            // Créer une nouvelle instance de GalleryImage
            $galleryImage = new GalleryImage();
            $galleryImage->file_name = $imageName;
            $galleryImage->path = $imagePath;
            $galleryImage->save(); // Enregistrer l'image dans la base de données

            return redirect()->route('gallery-images.index')->with('success', 'Image ajoutée avec succès.');
        }

        return back()->withInput()->with('error', 'Une erreur est survenue lors de l\'ajout de l\'image.');
    }





    public function show(GalleryImage $galleryImage)
    {
        return view('gallery_images.show', compact('galleryImage'));
    }




    public function edit(GalleryImage $galleryImage)
    {
        return view('gallery_images.edit', compact('galleryImage'));
    }




    public function update(Request $request, GalleryImage $galleryImage)
    {


        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            // Autres règles de validation
        ]);

        if ($request->hasFile('image')) {
            // Supprimer l'ancienne image du système de fichiers
            $oldImagePath = public_path('images').'/'.$galleryImage->image_path;
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }

            // Enregistrer la nouvelle image dans le système de fichiers
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $galleryImage->image_path = $imageName;
        }

        // Mettre à jour les autres données du formulaire dans le modèle GalleryImage
        // $galleryImage->attribut = $request->input('attribut');

        // Enregistrer les modifications dans la base de données
        $galleryImage->save();

        return redirect()->route('gallery-images.index')->with('success', 'Image mise à jour avec succès.');
    }




    public function destroy(GalleryImage $galleryImage)
    {

        // Supprimer l'image de la base de données
        $galleryImage->delete();

        return redirect()->route('gallery-images.index')->with('success', 'Image supprimée avec succès.');
    }
}

