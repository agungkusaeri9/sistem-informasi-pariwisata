<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Video::orderBy('category_id','ASC')->get();

        return view('admin.pages.video.index',[
            'title' => 'Data Video',
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
        return view('admin.pages.video.create',[
            'title' => 'Tambah Video',
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
            'url' => ['required'],
        ]);

        $data = request()->all();

        Video::create($data);
        
        return redirect()->route('admin.videos.index')->with('success','Video berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Video::findOrFail($id);
        return view('admin.pages.video.show',[
            'title' => 'Detail Video',
            'item' => $item
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Video::findOrFail($id);
        $categories = Category::orderBy('name','ASC')->get();
        return view('admin.pages.video.edit',[
            'title' => 'Edit Video',
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
            'url' => ['url'],
        ]);

        $data = request()->all();
        $item = Video::findOrFail($id);
        $item->update($data);
        return redirect()->route('admin.videos.index')->with('success','Video berhasil disimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Video::findOrFail($id);
        $item->delete();
        return redirect()->route('admin.videos.index')->with('success','Video berhasil dihapus');
    }
}
