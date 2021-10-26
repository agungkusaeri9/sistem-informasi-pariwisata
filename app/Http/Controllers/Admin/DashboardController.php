<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Culinary;
use App\Models\Culture;
use App\Models\Evaluation;
use App\Models\Event;
use App\Models\Inbox;
use App\Models\News;
use App\Models\Ticket;
use App\Models\Tour;
use App\Models\User;
use Egulias\EmailValidator\Warning\Comment;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $count = [
            'event' => Event::count(),
            'culinaries' => Culinary::count(),
            'news' => News::count(),
            'culture' => Culture::count(),
            'inbox' => Inbox::count(),
            'tour' => Tour::count(),
            'ticket' => Ticket::count(),
            'admin' => User::count()
        ];
        $latest_comments = Evaluation::latest()->limit(10)->get();
        return view('admin.pages.dashboard',[
            'title' => 'Dashboard',
            'count' => $count,
            'latest_comments' => $latest_comments
        ]);
    }
}
