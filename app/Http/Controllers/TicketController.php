<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index()
    {
        $items = Ticket::latest()->paginate(12);
        return view('frontend.pages.ticket.index',[
            'title' => 'Tiket',
            'items' => $items,
            'category' => Category::findOrFail(5)
        ]);
    }

    public function show($slug)
    {
        $item = Ticket::where('slug',$slug)->first();
        if(!$item)
        {
            return redirect()->route('ticket.index');
        }
        return view('frontend.pages.ticket.show',[
            'title' => $item->name,
            'item' => $item
        ]);
    }
}
