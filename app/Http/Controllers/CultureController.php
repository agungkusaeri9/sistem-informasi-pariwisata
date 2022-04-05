<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Culture;
use Illuminate\Http\Request;

class CultureController extends Controller
{
    public function index()
    {
        $items = Culture::latest()->paginate(12);
        return view('frontend.pages.culture.index',[
            'title' => 'Kebudayaan',
            'items' => $items,
            'category' => Category::findOrFail(2)
        ]);
    }

    public function show($slug)
    {
        $item = Culture::where('slug',$slug)->first();
        if(!$item)
        {
            return redirect()->route('culture.index');
        }
        $item->increment('visitor');
        return view('frontend.pages.culture.show',[
            'title' => $item->name,
            'item' => $item
        ]);
    }
}
