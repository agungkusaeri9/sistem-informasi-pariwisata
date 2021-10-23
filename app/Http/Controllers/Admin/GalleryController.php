<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Gallery::orderBy('category_id','ASC')->get();

        return view('admin.pages.gallery.index',[
            'title' => 'Data Galeri',
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('name','ASC')->get();
        return view('admin.pages.gallery.create',[
            'title' => 'Tambah Galeri',
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'name' => ['required'],
            'category_id' => ['required'],
            'location' => ['required'],
            'image' => ['required','array'],
        ]);

        $data = request()->all();
        foreach(request()->file('image') as $image)
        {
            $data['image'] = $image->store('gallery','public');
            Gallery::create($data);
        }
        
        return redirect()->route('admin.galleries.index')->with('success','Galleri berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Gallery::findOrFail($id);
        $categories = Category::orderBy('name','ASC')->get();
        return view('admin.pages.gallery.edit',[
            'title' => 'Edit Galeri',
            'item' => $item,
            'categories' => $categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate([
            'name' => ['required'],
            'category_id' => ['required'],
            'location' => ['required'],
            'image' => ['image','mimes:jpg,png,jpeg'],
        ]);

        $data = request()->all();
        $item = Gallery::findOrFail($id);
        if(request()->file('image'))
        {
            Storage::disk('public')->delete($item->image);
            $data['image'] = request()->file('image')->store('gallery','public');
        }else{
            $data['image'] = $item->image;
        }
        $item->update($data);
        return redirect()->route('admin.galleries.index')->with('success','Galeri berhasil disimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Gallery::findOrFail($id);
        Storage::disk('public')->delete($item->image);
        $item->delete();
        return redirect()->route('admin.galleries.index')->with('success','Galeri berhasil dihapus');
    }
}
