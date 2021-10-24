<?php

namespace App\Http\Controllers;

use App\Models\Culture;
use Illuminate\Http\Request;

class CultureController extends Controller
{
    public function index()
    {
        $items = Culture::latest()->paginate(12);
        return view('frontend.pages.culture.index',[
            'title' => 'Kuliner',
            'items' => $items
        ]);
    }

    public function show($slug)
    {
        $item = Culture::where('slug',$slug)->first();
        if(!$item)
        {
            return redirect()->route('culture.index');
        }
        return view('frontend.pages.culture.show',[
            'title' => $item->name,
            'item' => $item
        ]);
    }
}