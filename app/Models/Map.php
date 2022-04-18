<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Map extends Model
{
    protected $guarded = ['id'];

    public static function keyMapbox()
    {
        return 'pk.eyJ1IjoiYWd1bmdrdXNhZXJpIiwiYSI6ImNsMjJxZzNqdjFpeGkzanFkMDJ0cTlidzMifQ.T3hRAHL_y0PMSjpxnXVjVA';
    }

    public static function keyGmaps()
    {
        return 'AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg';
    }
}
