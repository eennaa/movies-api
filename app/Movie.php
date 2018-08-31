<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
        'title', 'director', 'imageURL', 'duration', 'releaseDate', 'genre'
    ];

    public static function search ($searchTerm, $skip, $take) {
        return self::where('title', 'LIKE', '%'.$searchTerm.'%')->skip($skip)->take($take)->get();
    }
}
