<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $items = Gallery::latest()->paginate(12);
        return view('frontend.pages.gallery.index',[
            'title' => 'Galeri Foto',
            'items' => $items
        ]);
    }

    public function show($id)
    {
        $item = Gallery::findOrFail($id);
        return view('frontend.pages.gallery.show',[
            'title' => $item->name,
            'item' => $item
        ]);
    }
}
