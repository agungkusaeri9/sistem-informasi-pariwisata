<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = 'setting';
    protected $guarded = ['id'];

    public function logo()
    {
        if($this->logo)
        {
            return asset('storage/' . $this->logo);
        }else{
            return "";
        }
    }
    public function map()
    {
        return $this->hasOne(Map::class,'id','map_id');
    }
}
