<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Http\Requests\NotaRequest;

class NoteController extends Controller
{
    public function index():View{
        $notes = Note::all();
        return view('note.index', compact('notes'));


    }

    public function create():View{

        return view('note.create');
    }

    public function store(NotaRequest $request):RedirectResponse{
        //Note::create([
           // 'title' -> $request-> title,
            //'description' -> $request-> description
        //]);
        //$note = new Note;
        //$note -> title = $request-> title;
        //$note -> descripction = $request -> descripction;
        //$note -> save();

        Note::create($request -> all());

        return redirect()->route('note.index')-> with('sucess', 'Note created');

    }

    public function edit(Note $note):View{

        //$myNote = Note::find( $note); -> esta es una forma de hacerlo.
        return view('note.edit', compact('note'));

    }

    public function update( NotaRequest  $request, Note $note):RedirectResponse{
        $note -> update($request -> all());

        //otro metodo
        //$note = Note::find($note);
        //$note -> title = $request -> title;
        //$note -> description = $request -> description;
        //$note -> save();

        return redirect() -> route('note.index')-> whit('sucess', 'Note update');

    }

    public function show(Note $note):View{
        return view('note.show', compact('note'));

    }

    public function delete(Note $note):RedirectResponse{

        $note-> delete();
        return redirect()-> route('note.index')-> with('danger', 'Note delete');

    }
}
