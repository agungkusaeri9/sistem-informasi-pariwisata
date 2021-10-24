<?php

namespace App\View\Components;

use App\Models\Category;
use Illuminate\View\Component;

class Sidebar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        $categories = Category::orderBy('name','ASC')->get();
        return view('components.sidebar',[
            'categories' => $categories
        ]);
    }
}
