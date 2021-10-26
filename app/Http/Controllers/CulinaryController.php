<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Culinary;
use Illuminate\Http\Request;

class CulinaryController extends Controller
{
    public function index()
    {
        $items = Culinary::with('category')->latest()->paginate(12);
        return view('frontend.pages.culinary.index',[
            'title' => 'Kuliner',
            'items' => $items,
            'category' => Category::findOrFail(1)
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
