<?php

namespace App\Http\Controllers;

use App\Models\Evaluation;
use Illuminate\Http\Request;

class EvaluationController extends Controller
{
    public function store()
    {
        request()->validate([
            'category_id' => ['required'],
            'content_id' => ['required'],
            'name' => ['required'],
            'comment' => ['required'],
            'score' => ['required'],
        ]);

        $data = request()->all();

        Evaluation::create($data);

        return back()->with('success','Anda telah berkomentar');
    }
}
