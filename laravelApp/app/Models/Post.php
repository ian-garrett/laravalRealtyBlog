<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public static function search($search)
    {

    	// search all MLSs in Eloquent based on title and acronym
    	return MLS::where(function($query) use ($search)
                {
                    $query->where('name', 'LIKE', "%$search%")
                          ->orWhere('acronym', 'LIKE', "%$search%");
                })->get();
    }
}
