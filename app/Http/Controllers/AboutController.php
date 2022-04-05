<?php

namespace App\Http\Controllers;

use App\Models\Culinary;
use App\Models\Culture;
use App\Models\News;
use App\Models\Setting;
use App\Models\Tour;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function __construct()
    {
        $item = Setting::first();
        $item->increment('visitor');
    }

    public function index()
    {
        $count = [
            'news' => News::count(),
            'culture' => Culture::count(),
            'culinary' => Culinary::count(),
            'tour' => Tour::count()
        ];
        return view('frontend.pages.about',[
            'title' => 'Tentang',
            'setting' => Setting::first(),
            'count' => $count
        ]);
    }
}
