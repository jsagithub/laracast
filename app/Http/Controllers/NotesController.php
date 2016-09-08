<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Card;

use App\Note;



class NotesController extends Controller
{
    public function store(Request $request, Card $card)
    {
    	// validate th fields on the form
    	$this->validate($request,[
    			'body' => 'required'
    		]);

    	$note = new Note($request->all());
    	$note->user_id=1;


    	// addNote is a function on the Card Model
    	$card->addNote($note);

    	// return back() do a refresh to the page an show the new note
    	return back();
    }

    public function edit(Note $note)
    {
    	return view('notes.edit',compact('note'));
    }

    public function update(Request $request, Note $note)
    {    	
    	$note->update($request->all());

    	return back();
    }
}
