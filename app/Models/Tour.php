<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    protected $guarded = ['id'];

    public function image()
    {
        return asset('storage/' . $this->image);
    }

    public function map()
    {
        return $this->hasOne(Map::class,'id','map_id');
    }

    // public function evaluations()
    // {
    //     return $this->hasMany(Evaluation::class);
    // }

    public function score($category_id,$content_id)
    {
        $evaluation_total = Evaluation::where('category_id',$category_id)->where('content_id',$content_id)->count();
        if($evaluation_total > 0)
        {
            $score_sum = Evaluation::where('category_id',$category_id)->where('content_id',$content_id)->sum('score');
            $score = number_format(($score_sum/$evaluation_total),1);
        }else{
            $score = 0;
        }

        return $score;
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
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
