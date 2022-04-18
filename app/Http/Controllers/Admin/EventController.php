<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Map;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{

    public function __construct()
    {
        $this->key = Map::keyMapbox();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Event::orderBy('name','ASC')->get();
        return view('admin.pages.event.index',[
            'title' => 'Data Event',
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
        return view('admin.pages.event.create',[
            'title' => 'Tambah Acara',
            'key' => $this->key
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
            'location' => ['required'],
            'start_date' => ['required'],
            'end_date' => ['required'],
            'image' => ['required','image','mimes:jpg,png,jpeg'],
        ]);

        $data = request()->all();
        if(request('lat') && request('lng'))
        {
            $map = New Map;
            $map->latitude = request('lat');
            $map->longtitude = request('lng');
            $map->save();
            $data['map_id'] = $map->id;
        }
        $data['slug'] = \Str::slug(request('name'));
        $data['image'] = request()->file('image')->store('event','public');
        Event::create($data);
        return redirect()->route('admin.events.index')->with('success','Kebudayaan berhasil ditambahkan');
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
        $item = Event::with('map')->findOrFail($id);
        return view('admin.pages.event.edit',[
            'title' => 'Edit Event',
            'item' => $item,
            'key' => $this->key
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
            'location' => ['required'],
            'start_date' => ['required'],
            'end_date' => ['required'],
            'image' => ['image','mimes:jpg,png,jpeg'],
        ]);

        $data = request()->all();
        $item = Event::findOrFail($id);
        if(request('lat') && request('lng'))
        {
            $map = $item->map;
            $map->latitude = request('lat');
            $map->longtitude = request('lng');
            $map->save();
        }else{
            $data['map_id'] = $item->map_id;
        }
        $data['slug'] = \Str::slug(request('name'));
        if(request()->file('image'))
        {
            Storage::disk('public')->delete($item->image);
            $data['image'] = request()->file('image')->store('event','public');
        }else{
            $data['image'] = $item->image;
        }
        $item->update($data);
        return redirect()->route('admin.events.index')->with('success','Event berhasil disimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Event::with('map')->findOrFail($id);
        if($item->map_id)
        {
            Map::find($item->map_id)->delete();
        }
        Storage::disk('public')->delete($item->image);
        $item->delete();
        return redirect()->route('admin.events.index')->with('success','Event berhasil dihapus');
    }
}
