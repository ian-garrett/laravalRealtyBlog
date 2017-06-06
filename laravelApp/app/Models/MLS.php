<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MLS extends Model
{
    public $table = "MLStest";


    //declare possession of notes 
    public function notes()
    {
    	return $this->hasMany(mlsnote::class);
    }


    //function to add a note to a specific userID
    public function addNote(mlsnote $note, $user_id)
    {
    	$note->user_id = $user_id;
    	return $this->notes()->save($note);
    }
}
