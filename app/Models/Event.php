<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $guarded = ['id'];
    public $dates = ['start_date','end_date'];

    public function image()
    {
        return asset('storage/' . $this->image);
    }

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
