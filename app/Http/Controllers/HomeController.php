<?php

namespace App\Http\Controllers;

use App\Models\Culinary;
use App\Models\Culture;
use App\Models\Event;
use App\Models\Gallery;
use App\Models\Inbox;
use App\Models\News;
use App\Models\Ticket;
use App\Models\Tour;
use App\Models\Video;
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
        $cultures = Culture::limit(4)->get();
        $culinaries = Culinary::limit(4)->get();
        $inboxes = Inbox::where('status',1)->limit(4)->get();
        $count = [
            'tour' => Tour::count(),
            'culinary' => Culinary::count(),
            'culture' => Culture::count(),
            'news' => News::count(),
            'event' => Event::count()
        ];
        $latest_video = Video::latest()->first();
        return view('frontend.pages.home',[
            'title' => 'Home',
            'tours' => $tours,
            'cultures' => $cultures,
            'culinaries' => $culinaries,
            'count' => $count,
            'inboxes' => $inboxes,
            'latest_video' => $latest_video
        ]);
    }
}
