<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Video extends Model
{
    protected $guarded = ['id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function url()
    {
        $url = $this->url;
        $after = Str::after($url,'watch?v=');
        $link = 'https://www.youtube.com/embed/' . $after;
        return $link;
    }

    public function countComment($category_id,$content_id)
    {
        $evaluation_total = Evaluation::where('category_id',$category_id)->where('content_id',$content_id)->count();

        return $evaluation_total;
    }

    public function getComments($category_id,$content_id)
    {
        $comments = Evaluation::where('category_id',$category_id)->where('content_id',$content_id)->latest()->get();

        return $comments;
    }
}
