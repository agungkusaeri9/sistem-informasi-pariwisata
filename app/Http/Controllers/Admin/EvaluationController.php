<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Evaluation;
use Illuminate\Http\Request;

class EvaluationController extends Controller
{
    public function index()
    {
        $items = Evaluation::latest()->get();
        return view('admin.pages.evaluation.index',[
            'title' => 'Data Penilaian',
            'items' => $items
        ]);
    }

    public function destroy($id)
    {
        $item = Evaluation::findOrFail($id);
        $item->delete();
        return redirect()->route('admin.evaluations.index')->with('success','Penilaian berhasil dihapus');
    }
}
