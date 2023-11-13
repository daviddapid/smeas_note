<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class NoteController extends Controller
{
    function index(): View
    {
        $notes = Note::where('user_id', Auth::user()->id)->get();
        return view('index', compact('notes'));
    }
    function search(Request $request): View
    {
        $notes = Note::where('user_id', Auth::user()->id)->where('title', 'like', '%' . $request->title . '%')->get();

        return view('index', compact('notes'));
    }

    function store(Request $request): RedirectResponse
    {
        $request['user_id'] = 1;
        Note::create($request->except('_token'));

        alert('Sukses', 'Sukses menambah catatan baru', 'success');
        return back();
    }
    function update(Note $note, Request $request): RedirectResponse
    {
        $note->update($request->except(['_token', '_method']));
        alert('Sukses', 'Sukses memperbarui data berjudul: ' . $note->title, 'success');
        return back();
    }
    function destroy(Note $note): RedirectResponse
    {
        $note->delete();
        alert('Sukses', 'Sukses menghapus data berjudul: ' . $note->title, 'success');
        return back();
    }
}
