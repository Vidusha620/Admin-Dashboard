<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Http\Requests\NoteStoreRequest;
use App\Http\Requests\NoteUpdateRequest;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        // Fetch the notes with pagination (5 notes per page)
        $notes = Note::latest()->paginate(10);

        // Pass notes to the view with pagination data
        return view('notes.index',['notes'=> $notes]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('notes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(NoteStoreRequest $request): RedirectResponse
    {
       $request->validate([
        'title'=> 'required|string|max:255',
        'content'=>'required|string|max:255',
        ]);

        Note::create($request->all());

        return redirect('/notes')->with('success','Note Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Note $note): View
    {
        // Show the single note
        return view('notes.show', compact('note'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Note $note): View
    {
        // Pass the note to the edit form
        return view('notes.edit', compact('note'));  
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(NoteUpdateRequest $request, Note $note)
    {
        $request->validate([
            'title'=> 'required|string|max:255',
            'content'=>'required|string|max:255',
            ]);
    
            $note->update($request->all());
    
            return redirect('/notes')->with('success','Note Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Note $note): RedirectResponse
    {
        // Delete the note
        $note->delete();

        // Redirect to the notes index with success message
        return redirect()->route('notes.index')
                         ->with('success', 'Note deleted successfully.');
    }
}
