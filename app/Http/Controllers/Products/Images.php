<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

use App\Models\Products\Images as ImagesModel;

class Images extends Controller
{
    public function uploadImage(Request $request)
    {
        // Validar la imagen
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'product_id' => 'required|exists:products,id',
        ]);

        $path = Storage::disk('s3')->putFile(
            'images/products/' . $request->input('product_id'),
            $request->file('image')
        );

        if (!$path) {
            return response()->json(['error' => 'No se pudo subir la imagen a S3.'], 500);
        }

        $url = Storage::disk('s3')->url($path);

        // Guardar la URL de la imagen en la base de datos
        ImagesModel::create([
            'product_id' => $request->input('product_id'),
            'image_url' => $path,
        ]);

        return response()->json([
            'path' => $path,
            'url' => $url,
        ]);
    }

    public function deleteImage(Request $request)
    {

        // get data from query
        $imageUrl = $request->query('image_url');
        

        $request->validate([
            'image_url' => 'required|string',
        ]);

        $deleted = Storage::disk('s3')->delete($imageUrl);

        if (!$deleted) {
            return response()->json(['error' => 'No se pudo eliminar la imagen de S3.'], 500);
        }

        ImagesModel::where('image_url', $imageUrl)->delete();

        return response()->json(['message' => 'Imagen eliminada correctamente.']);
    }
}
