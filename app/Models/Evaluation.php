<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    protected $guarded = ['id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function content($category_id,$content_id)
    {
        if($category_id == 1)
        {
            $content = Culinary::findOrFail($content_id)->name;
        }else if($category_id == 2)
        {
            $content = Culture::findOrFail($content_id)->name;
        }else if($category_id == 3)
        {
            $content = Tour::findOrFail($content_id)->name;
        }else if($category_id == 4)
        {
            $content = Event::findOrFail($content_id)->name;
        }else if($category_id == 5)
        {
            $content = Ticket::findOrFail($content_id)->name;
        }
        
        return $content;
    }
}
