<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $guarded = ['id'];

    public function image()
    {
        return asset('storage/' . $this->image);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
