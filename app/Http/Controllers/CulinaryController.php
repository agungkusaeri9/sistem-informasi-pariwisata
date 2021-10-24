<?php

namespace App\Http\Controllers;

use App\Models\Culinary;
use Illuminate\Http\Request;

class CulinaryController extends Controller
{
    public function index()
    {
        $items = Culinary::latest()->paginate(12);
        return view('frontend.pages.culinary.index',[
            'title' => 'Kuliner',
            'items' => $items
        ]);
    }

    public function show($slug)
    {
        $item = Culinary::where('slug',$slug)->first();
        if(!$item)
        {
            return redirect()->route('culinary.index');
        }
        return view('frontend.pages.culinary.show',[
            'title' => $item->name,
            'item' => $item
        ]);
    }
}
