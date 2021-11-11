<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use APp\Models\User;

class NoteController extends Controller
{

    public function __construct() {
        $this->middleware('auth'); 
    }
    
    public function index() {
        // Get the data from the database
        $user = auth()->user()->id;
        if(!request('search')){
            
            $notes = Note::where('user_id', $user)->get();

        }
        else
        {
            $notes = Note::where('user_id', $user)->where('topic', request('search'))->get();
            
        }

        return view('notes.index', ['notes'=>$notes]);
        
    }

    public function show($id) {
        
        $note = Note::findOrFail($id);

        return view('notes.show', ['note'=>$note]);

    }

    public function create() {

        return view('notes.create');

    }

    public function store() {

        $user = auth()->user()->id;

        $note = new Note();

        $note->topic = request('topic');
        $note->user_id = $user;
        $note->status = request('status');
        $note->description = request('description');

        $note->save();

        return redirect('/notes')->with('mssg', 'Thanks you For one more Note');

    }

    public function find () {

        if(!request('search')){
            
            $notes = Note::where('status', 'public')->get();

        }
        else
        {
            $notes = Note::where('status', 'public')->where('topic', request('search'))->get();
            
        }


        return view('notes.find', ['notes'=>$notes]);

    }

    public function findshow ($id) {


        $note = Note::findOrFail($id);
        $user = User::where('id', request('user'))->get();

        // error_log($user[0]->name);

        return view('notes.showfind', ['note'=>$note, 'user'=>$user]);


    }

    public function share ($id) {

        if(!request('email')) {
            $note = Note::where('id', $id)->get();
            error_log($note);
            return view('notes.share', ['note'=>$note[0]]);
        } else {
            $users = User::where('email', request('email'))->get();
            if(count($users) < 1) {
                return redirect('/notes')->with('mssg', 'Friend Not Found');
            }
            $user = $users[0]->id;
            $note = new Note();
            $note->topic = request('topic');
            $note->user_id = $user;
            $note->status = request('status');
            $note->description = request('descriptio');

            $note->save();

            return redirect('/notes')->with('mssg', 'Shared With your Friend');
        }
        
    }

    public function edit ($id) {

        if(!request('topic')) {

            $note = Note::where('id', $id)->get();

            return view('notes.edit', ['note'=>$note[0]]);

        }
        else
        {
            Note::where('id', $id)->update(['topic'=>request('topic'), 'description'=>request('description'), 'status'=>request('status')]);
            return redirect('/notes')->with('mssg1', 'Updated');;
        }

        

    }

    public function destroy ($id) {

        $note = Note::findOrFail($id);
        $note->delete();
        return redirect('/notes');

    }


}
