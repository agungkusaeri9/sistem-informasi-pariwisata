<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Culinary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CulinaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Culinary::orderBy('name','ASC')->get();

        return view('admin.pages.culinary.index',[
            'title' => 'Data Kuliner',
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
        return view('admin.pages.culinary.create',[
            'title' => 'Tambah Kuliner'
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
            'description' => ['required'],
            'price' => ['required'],
            'unit' => ['required'],
            'facility' => ['required'],
            'location' => ['required'],
            'image' => ['required','image','mimes:jpg,png,jpeg'],
        ]);

        $data = request()->all();
        $data['slug'] = \Str::slug(request('name'));
        $data['image'] = request()->file('image')->store('culinary','public');
        Culinary::create($data);
        return redirect()->route('admin.culinaries.index')->with('success','Kuliner berhasil ditambahkan');
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
        $item = Culinary::findOrFail($id);
        return view('admin.pages.culinary.edit',[
            'title' => 'Edit Kuliner',
            'item' => $item
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
            'description' => ['required'],
            'price' => ['required'],
            'unit' => ['required'],
            'facility' => ['required'],
            'location' => ['required'],
            'image' => ['image','mimes:jpg,png,jpeg'],
        ]);

        $data = request()->all();
        $item = Culinary::findOrFail($id);
        $data['slug'] = \Str::slug(request('name'));
        if(request()->file('image'))
        {
            Storage::disk('public')->delete($item->image);
            $data['image'] = request()->file('image')->store('culinary','public');
        }else{
            $data['image'] = $item->image;
        }
        $item->update($data);
        return redirect()->route('admin.culinaries.index')->with('success','Kuliner berhasil disimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Culinary::findOrFail($id);
        Storage::disk('public')->delete($item->image);
        $item->delete();
        return redirect()->route('admin.culinaries.index')->with('success','Kuliner berhasil dihapus');
    }
}
