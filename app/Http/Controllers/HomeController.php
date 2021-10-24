<?php

namespace App\Http\Controllers;

use App\Models\Culinary;
use App\Models\Culture;
use App\Models\Gallery;
use App\Models\Tour;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $tours = Tour::latest()->limit(4)->get();
        $cultures = Culture::limit(6)->get();
        $culinaries = Culinary::limit(6)->get();
        $count = [
            'tour' => Tour::count(),
            'culinary' => Culinary::count(),
            'culture' => Culture::count(),
            'gallery' => Gallery::count()
        ];
        return view('frontend.pages.home',[
            'title' => 'Home',
            'tours' => $tours,
            'cultures' => $cultures,
            'culinaries' => $culinaries,
            'count' => $count
        ]);
    }
}
