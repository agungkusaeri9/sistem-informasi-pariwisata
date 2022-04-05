<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function __construct()
    {
        $item = Setting::first();
        $item->increment('visitor');
    }

    public function index()
    {
        $items = Video::latest()->paginate(12);
        return view('frontend.pages.video.index',[
            'title' => 'Galeri Video',
            'items' => $items
        ]);
    }

    public function show($id)
    {
        $item = Video::findOrFail($id);
        return view('frontend.pages.video.show',[
            'title' => $item->name,
            'item' => $item
        ]);
    }
}
