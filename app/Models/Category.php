<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = ['id'];

    public function image()
    {
        if($this->image)
        {
            return asset('storage/' . $this->image);
        }else{
            return "";
        }
    }
}
