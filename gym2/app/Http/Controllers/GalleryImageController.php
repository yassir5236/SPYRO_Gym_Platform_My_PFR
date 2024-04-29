<?php
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



    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif|', 

        ]);

        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $imageName = $image->getClientOriginalName();
            $imagePath = $image->storeAs('gallery_images', $imageName, 'public'); 

            $galleryImage = new GalleryImage();
            $galleryImage->file_name = $imageName;
            $galleryImage->path = $imagePath;
            $galleryImage->save(); 

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






    public function destroy(GalleryImage $galleryImage)
    {

        $galleryImage->delete();

        return redirect()->route('gallery-images.index')->with('success', 'Image supprimée avec succès.');
    }
}

