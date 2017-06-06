<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\mlsnote;
use App\MLS;

use App\Http\Controllers\Controller;

class NotesController extends Controller
{
    public function store(Request $request, MLS $mls)
    {	
        $this->validate($request, ['body'=>'required']);

        $note = new mlsnote($request->all());
        $note->user_id=2;

        $user_id=2;
    	$mls->addNote($note, $user_id);

    	return back();
    }

    public function edit(mlsnote $note)
    {
    	return view('notes.edit', compact('note'));
    }

    public function update(Request $request, mlsnote $note)
    {
    	$note->update($request->all());

    	return back();
    }

    public function delete(mlsnote $note)
    {
    	$note->delete();

    	return back();
    }
}
