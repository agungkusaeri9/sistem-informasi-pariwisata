<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $items = News::latest()->paginate(12);
        return view('frontend.pages.news.index',[
            'title' => 'Berita',
            'items' => $items
        ]);
    }

    public function show($slug)
    {
        $item = News::where('slug',$slug)->first();
        if(!$item)
        {
            return redirect()->route('news.index');
        }
        return view('frontend.pages.news.show',[
            'title' => $item->name,
            'item' => $item
        ]);
    }
}
