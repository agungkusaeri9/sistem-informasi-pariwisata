<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $items = News::latest()->paginate(12);
        return view('frontend.pages.news.index',[
            'title' => 'Berita',
            'items' => $items,
            'category' => Category::findOrFail(6)
        ]);
    }

    public function show($slug)
    {
        $item = News::where('slug',$slug)->first();
        if(!$item)
        {
            return redirect()->route('news.index');
        }
        $item->increment('visitor');
        return view('frontend.pages.news.show',[
            'title' => $item->name,
            'item' => $item
        ]);
    }
}
