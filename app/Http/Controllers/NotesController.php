<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

class NotesController extends Controller
{
    function index(){
        $notes=Note::all();
        return view('dashboard.notes.index')->with('notes',$notes);

    }
    function destroy($id){
        $notes=Note::findOrFail($id)->delete();
        return redirect()->back();
    }
}
