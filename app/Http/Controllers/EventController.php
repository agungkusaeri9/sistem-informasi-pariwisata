<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $items = Event::latest()->paginate(12);
        return view('frontend.pages.event.index',[
            'title' => 'Event',
            'items' => $items
        ]);
    }

    public function show($slug)
    {
        $item = Event::where('slug',$slug)->first();
        if(!$item)
        {
            return redirect()->route('event.index');
        }
        return view('frontend.pages.event.show',[
            'title' => $item->name,
            'item' => $item
        ]);
    }
}
