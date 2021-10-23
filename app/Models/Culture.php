<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Culture extends Model
{
    protected $guarded = ['id'];

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
}
