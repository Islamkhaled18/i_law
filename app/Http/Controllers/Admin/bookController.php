<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Http\Request;

class bookController extends Controller
{
    public function addImages($book_id)
    {
        return view('admin.pages.book.images')->withId($book_id);
    }
    public function saveBookImages(Request $request)
    {
        $image = $request->file('file');
        $imageName = $image->getClientOriginalName();
        $image->move(public_path('storage/photos/books'),$imageName);
        
        $imageUpload = new Image();
        $imageUpload->content_image = $imageName;
        $imageUpload->book_id = $request->book_id;
        $imageUpload->save();
        return response()->json(['success'=>$imageName]);
    }

    public function fileDestroy(Request $request)
    {
        $filename =  $request->get('content_image');
        Image::where('content_image',$filename)->delete();
        $path=public_path().'/images/'.$filename;
        if (file_exists($path)) {
            unlink($path);
        }
        return $filename;  
    }
  
}
