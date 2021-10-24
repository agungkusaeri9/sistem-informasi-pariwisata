<?php

namespace App\Http\Controllers;

use App\Models\Inbox;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('frontend.pages.contact',[
            'title' => 'Kontak Kami'
        ]);
    }

    public function store()
    {
        request()->validate([
            'name' => ['required'],
            'text' => ['required'],
            'subject' => ['required']
        ]);

        $data = request()->all();

        Inbox::create($data);

        return redirect()->route('home')->with('success','Terimakasih telah menghubungi kami');
    }
}
