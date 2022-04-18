<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Map;
use App\Models\Tour;
use Illuminate\Http\Request;

class TourController extends Controller
{
    public function index()
    {
        $items = Tour::latest()->paginate(12);
        return view('frontend.pages.tour.index',[
            'title' => 'Destinasi Wisata',
            'items' => $items,
            'category' => Category::findOrFail(3)
        ]);
    }

    public function show($slug)
    {
        $item = Tour::where('slug',$slug)->first();
        if(!$item)
        {
            return redirect()->route('tour.index');
        }
        $item->increment('visitor');
        return view('frontend.pages.tour.show',[
            'title' => $item->name,
            'item' => $item,
            'key' => Map::keyGmaps()
        ]);
    }
}
