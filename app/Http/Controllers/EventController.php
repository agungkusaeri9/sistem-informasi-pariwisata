<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Event;
use App\Models\Map;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $items = Event::latest()->paginate(12);
        return view('frontend.pages.event.index',[
            'title' => 'Event',
            'items' => $items,
            'category' => Category::findOrFail(4)
        ]);
    }

    public function show($slug)
    {
        $item = Event::where('slug',$slug)->first();
        if(!$item)
        {
            return redirect()->route('event.index');
        }
        $item->increment('visitor');
        return view('frontend.pages.event.show',[
            'title' => $item->name,
            'item' => $item,
            'key' => Map::keyGmaps()
        ]);
    }
}
